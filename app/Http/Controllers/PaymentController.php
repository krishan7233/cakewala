<?php

namespace App\Http\Controllers;
use App\Models\User;


use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Blog;
use App\Models\ProductImage;
use App\Models\ProductVariant;
use App\Models\Product;
use App\Models\Wishlist;
use App\Models\Banner;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Models\Order;
use App\Mail\OrderInvoiceMail;
use Illuminate\Support\Facades\Mail;

use App\Models\Cart;
use Carbon\Carbon;

use App\Models\DeliveryAddress;
use Illuminate\Support\Facades\Session;


class PaymentController extends Controller
{
    private function encrypt($plainText, $key)
    {
        $key = hex2bin(md5($key));
        $initVector = pack("C*", 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15);
        $openMode = openssl_encrypt($plainText, 'AES-128-CBC', $key, OPENSSL_RAW_DATA, $initVector);
        return bin2hex($openMode);
    }

    private function decrypt($encryptedText, $key)
    {
        $key = hex2bin(md5($key));
        $initVector = pack("C*", 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15);
        $encryptedText = hex2bin($encryptedText);
        $decryptedText = openssl_decrypt($encryptedText, 'AES-128-CBC', $key, OPENSSL_RAW_DATA, $initVector);
        return $decryptedText;
    }

    public function initiatePayment(Request $request)
    {

        $addressId = $request->address_id;
        $totalamount=$request->total_amount;
        $order_messages=$request->order_messages;
        $coupon_code=$request->coupon_code;
        // You can retrieve address details if needed
        $address = DeliveryAddress::find($addressId);
        
        $user_id = auth()->id();
        
         $paymentvia = $request->paymentvia;
        if (!$paymentvia) {
            return back()->with('error', 'Please Select At least One Payment Method.');
        }
        
        if (!$address) {
            return back()->with('error', 'Invalid address selected.');
        }
        if(!empty($coupon_code)){
             $coupon = DB::table('coupons')
                    ->where('code', $coupon_code)
                    ->where('status','active')
                    ->first();

            if (!$coupon) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Invalid coupon code.'
                ]);
            }
    
            if ($coupon->end_date && now()->gt($coupon->end_date)) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'This coupon has expired.'
                ]);
            }
            
            $couponUsed = DB::table('orders')
                    ->where('user_id', $user_id)
                    ->where('coupon_id', $coupon->id)
                    ->exists();
        
            if ($couponUsed) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'You have already used this coupon.'
                ]);
            }

            
        }
       
        $couponId=$coupon->id??0;
        $coupon_discount=$coupon->discount_value??0;
        // $total_amount=$totalamount;
        $total_amount=1;
          // Get logged-in user ID

        // Example: Use address details in payment fields (optional)
        $billing_name = $address->name ?? 'Test User';
        $billing_tel = $address->mobile ?? '7233958662';
        $billing_email = $address->email ?? 'test@example.com';
        $billing_address = $address->address ?? 'Default Address';

        // $order_id = 'ORD' . rand(1000, 9999);
        $order_id = 'ORD' . Carbon::now()->format('YmdHis') . rand(1000, 9999);

        $merchant_data = 'merchant_id=' . env('CCAVENUE_MERCHANT_ID') . '&';
        $merchant_data .= 'order_id=' . $order_id . '&';
        $merchant_data .= 'currency=INR&';
        $merchant_data .= 'amount=' . $total_amount . '&';
        $merchant_data .= 'redirect_url=' . env('CCAVENUE_REDIRECT_URL') . '&';
        $merchant_data .= 'cancel_url=' . env('CCAVENUE_CANCEL_URL') . '&';
        $merchant_data .= 'language=EN&';
        $merchant_data .= 'billing_name=' . urlencode($billing_name) . '&';
        $merchant_data .= 'billing_tel=' . $billing_tel . '&';
        $merchant_data .= 'merchant_param1=' . $user_id . '&';
        $merchant_data .= 'merchant_param2=' . $couponId . '&';
        $merchant_data .= 'merchant_param3=' . $address->id . '&';
        $merchant_data .= 'merchant_param4=' . $order_messages . '&';
        $merchant_data .= 'billing_email=' . $billing_email;



        $encrypted_data = $this->encrypt($merchant_data, env('CCAVENUE_WORKING_KEY'));

        return view('website.redirect', [
            'encRequest' => $encrypted_data,
            'access_code' => env('CCAVENUE_ACCESS_CODE')
        ]);
    }

    public function handleResponse(Request $request)
    {
        $encResponse = $request->input('encResp');
        $rcvdString = $this->decrypt($encResponse, env('CCAVENUE_WORKING_KEY'));
        $decryptValues = explode('&', $rcvdString);
        $responseData = [];
       
        
        foreach ($decryptValues as $value) {
            $parts = explode('=', $value);
            if (count($parts) == 2) {
                $responseData[$parts[0]] = $parts[1];
            }
        }

        $userId = $responseData['merchant_param1'] ?? auth()->id(); 
        $couponId = $responseData['merchant_param2'] ?? null;  
        $address_id=$responseData['merchant_param3'] ?? null; 
        $order_messages=$responseData['merchant_param4'] ?? null; 
        
        try {
            
        DB::beginTransaction();
        
        $user = User::find($userId);
        if ($user) {
            Auth::login($user);
        }


        $order = DB::table('orders')->insertGetId([
            'user_id' => $userId,
            'payment_id'=>$responseData['order_id'],
            'tracking_id'=>$responseData['tracking_id'],
            'address_id'=>$address_id,
            'payment_status' => $responseData['order_status'] ?? 'pending',
            'payment_type' => $responseData['payment_mode'] ?? null,
            'payment_amount' => $responseData['amount'] ?? 0,
            'coupon_id' => $couponId,
            'order_messages'=>$order_messages,
            'payment_json' => json_encode($responseData),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $session_id = session()->getId();

        $query = Cart::with(['product', 'variant']);
        if(auth()->check()) {
            $query->where(function($q) use ($session_id) {
                $q->where('user_id', auth()->id())
                  ->orWhere('session_id', $session_id);
            });
        } else {
            $query->where('session_id', $session_id);
        }

        $cartItems = $query->get();

        foreach ($cartItems as $item) {
            DB::table('order_items')->insert([
                'order_id' => $order,
                'product_id' => $item->product_id,
                'variant_id' => $item->variant_id,
                'quantity' => $item->quantity,
                'price_per_unit' => $item->price,
                'subtotal' => $item->quantity * $item->price,
                'shipping_charge'=>$item->shipping_charge,
                'delivery_date'=>$item->delivery_date,
                'time_slot'=>$item->time_slot,
                'product_message'=>$item->product_message,
                'order_image'=>$item->order_image,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }


        if(auth()->check()) {
            Cart::where('user_id', $userId)->delete();
        }
        Cart::where('session_id', $session_id)->delete();
        
        DB::commit();
        $this->sendOrderInvoice($order);
        return view('website.result', [
            'message' => 'Payment Status: ' . $responseData['order_status'] ,
            'data' => $responseData
        ]);
        
        
         } catch (\Exception $e) {
        DB::rollBack();
        \Log::error('Payment Handling Error: ' . $e->getMessage());

        return back()->with('error', 'Something went wrong while processing your payment. Please try again.');
    }
    }
    
    
    
    
        public function offlinePayment(Request $request)
    {

        $addressId = $request->address_id;
        $totalamount=$request->total_amount;
        $order_messages=$request->order_messages;
        $coupon_code=$request->coupon_code;
        
        // You can retrieve address details if needed
        $address = DeliveryAddress::find($addressId);
        
        $user_id = auth()->id();
        $paymentvia = $request->paymentvia;
        if (!$paymentvia) {
            return back()->with('error', 'Please Select At least One Payment Method.');
        }
        
        if (!$address) {
            return back()->with('error', 'Invalid address selected.');
        }
        if(!empty($coupon_code)){
             $coupon = DB::table('coupons')
                    ->where('code', $coupon_code)
                    ->where('status','active')
                    ->first();

            if (!$coupon) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Invalid coupon code.'
                ]);
            }
    
            if ($coupon->end_date && now()->gt($coupon->end_date)) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'This coupon has expired.'
                ]);
            }
            
            $couponUsed = DB::table('orders')
                    ->where('user_id', $user_id)
                    ->where('coupon_id', $coupon->id)
                    ->exists();
        
            if ($couponUsed) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'You have already used this coupon.'
                ]);
            }

            
        }
       
        $couponId=$coupon->id??0;
        $coupon_discount=$coupon->discount_value??0;
        // $total_amount=$totalamount;
        $total_amount=1;

        $order_id = 'ORD' . Carbon::now()->format('YmdHis') . rand(1000, 9999);
        
        try {
            
                DB::beginTransaction();
                
              
                $order = DB::table('orders')->insertGetId([
                    'user_id' => $user_id,
                    'payment_id'=>$order_id,
                    'tracking_id'=>$order_id,
                    'address_id'=>$addressId,
                    'payment_status' => 'Success',
                    'payment_type' => 'Offline',
                    'payment_amount' => $total_amount ?? 0,
                    'coupon_id' => $couponId,
                    'order_messages'=>$order_messages,
                    'payment_json' => json_encode($request->all()),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);

            $responseData=(array)DB::table('orders')->where('id',$order)->first();
                $session_id = session()->getId();
        
                $query = Cart::with(['product', 'variant']);
                if(auth()->check()) {
                    $query->where(function($q) use ($session_id) {
                        $q->where('user_id', auth()->id())
                          ->orWhere('session_id', $session_id);
                    });
                } else {
                    $query->where('session_id', $session_id);
                }
        
                $cartItems = $query->get();
        
                foreach ($cartItems as $item) {
                    DB::table('order_items')->insert([
                        'order_id' => $order,
                        'product_id' => $item->product_id,
                        'variant_id' => $item->variant_id,
                        'quantity' => $item->quantity,
                        'price_per_unit' => $item->price,
                        'subtotal' => $item->quantity * $item->price,
                        'shipping_charge'=>$item->shipping_charge,
                        'delivery_date'=>$item->delivery_date,
                        'time_slot'=>$item->time_slot,
                        'product_message'=>$item->product_message,
                        'order_image'=>$item->order_image,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);
                }
        
        
                if(auth()->check()) {
                    Cart::where('user_id', $user_id)->delete();
                }
                Cart::where('session_id', $session_id)->delete();
            
                DB::commit();
                $this->sendOrderInvoice($order);
                return view('website.result', [
                    'message' => 'Payment Status: Success',
                    'data' => $responseData
                ]);
        
        
         } catch (\Exception $e) {
            DB::rollBack();
            \Log::error('Payment Handling Error: ' . $e->getMessage());
    
            return back()->with('error', 'Something went wrong while processing your payment. Please try again.');
         }
    }
    
    
    public function sendOrderInvoice($order_id){
        $order = Order::with('items.product', 'user')->findOrFail($order_id);
        Mail::to($order->user->email)->send(new OrderInvoiceMail($order));
        // return true;
    }

    public function emailInvoice(){
            $order_id=14;
            $order = Order::with('items', 'user')->findOrFail($order_id);
            
        Mail::to($order->user->email)->send(new OrderInvoiceMail($order));
        return true;
    }

}
