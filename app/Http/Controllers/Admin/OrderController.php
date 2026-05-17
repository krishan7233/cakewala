<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Models\Cart;
class OrderController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Order::with('user','deliveryAddress')->latest();

            return DataTables::of($data)
                ->addIndexColumn()
                ->editColumn('name', function ($row) {
                    return $row->user->name ?? 'N/A';
                })
                ->editColumn('email', function ($row) {
                    return $row->user->email ?? 'N/A';
                })
               ->editColumn('delivery_mobile_number', function ($row) {
                    return $row->deliveryAddress->mobile ?? 'N/A';
                })
                ->editColumn('payment_status', function ($row) {
                    return ucfirst($row->payment_status);
                })
                ->editColumn('order_status', function ($row) {
                    $selectedPending = $row->order_status == 0 ? 'selected' : '';
                    $selectedComplete = $row->order_status == 1 ? 'selected' : '';
                    return '
                        <select class="form-select order-status-dropdown" data-id="' . $row->id . '">
                            <option value="0" ' . $selectedPending . '>Pending</option>
                            <option value="1" ' . $selectedComplete . '>Complete</option>
                        </select>';
                })
                ->editColumn('created_at', function ($row) {
                    return $row->created_at->format('d M Y, h:i A');
                })
                 ->addColumn('action', function ($row) {
                    return '<a href="' . route('admin.order.item.show', $row->id) . '" class="btn btn-sm btn-primary">View</a>';
                })
                ->rawColumns(['name', 'email', 'payment_status', 'order_status', 'created_at','action'])
                ->make(true);
        }

        return view('admin.orders');
    }
    
    public function cart_order(Request $request)
    {
        if ($request->ajax()) {
            
            $carts = Cart::with(['user', 'product.images', 'variant'])
            ->whereHas('user') // Only carts with users (logged-in)
            ->latest()
            ->get()
            ->groupBy('user_id'); // Group by user for one row per user

        $data = [];

        foreach ($carts as $userId => $cartItems) {
            $user = $cartItems->first()->user;

            $totalAmount = $cartItems->sum(function ($item) {
                return ($item->price * $item->quantity) + $item->shipping_charge;
            });

            $data[] = [
                'DT_RowIndex' => null,
                'name' => $user->name ?? 'Guest',
                'email' => $user->email ?? 'N/A',
                'delivery_mobile_number' => $user->mobile ?? 'N/A',
                'payment_status' => 'Pending',
                'payment_amount' => $totalAmount,
                'created_at' => optional($cartItems->first()->created_at)->format('d M Y, h:i A'),
            ];
        }

        return DataTables::of(collect($data))
            ->addIndexColumn()
            ->rawColumns(['order_status', 'action'])
            ->make(true);
    }
        return view('admin.cart_order');
        
    }
    public function updateStatus(Request $request)
    {
        $request->validate([
            'order_id' => 'required|exists:orders,id',
            'order_status' => 'required|in:0,1',
        ]);

        $order = Order::find($request->order_id);
        $order->order_status = $request->order_status;
        $order->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Order status updated successfully.'
        ]);
}

public function orderItemShow($id){
    $order = Order::with(['items.product'])->find($id);
    return view('admin.order-item', compact('order'));

}
}
