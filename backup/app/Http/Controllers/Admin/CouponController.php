<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Coupon;
use DataTables;

class CouponController extends Controller
{
public function coupon(Request $request)
{
    if ($request->ajax()) {
        $coupons = Coupon::orderByDesc('id');
        return DataTables::of($coupons)
            ->addIndexColumn()
            ->editColumn('status', function ($row) {
                return $row->status ? 'Active' : 'Inactive';
            })
            ->addColumn('action', function ($row) {
                $editUrl = route('admin.coupons.edit', $row->id);
                $deleteUrl = route('admin.coupons.destroy', $row->id);
                 return '<a href="' . $editUrl . '" class="btn btn-sm btn-primary me-1">Edit</a><button class="btn btn-sm btn-danger delete-btn" data-url="' . $deleteUrl . '">Delete</button>';
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    return view('admin.coupons');
}
public function couponEdit($id){
    $coupon = Coupon::findOrFail($id);
    return view('admin.edit-coupon', compact('coupon'));
}
public function couponUpdate(Request $request,$id){
    $request->validate([
        'code' => 'required|string|max:50|unique:coupons,code,' . $id,
        'discount_type' => 'required|in:percentage,flat,fixed',
        'discount_value' => 'required|numeric|min:0',
        'max_discount' => 'nullable|numeric|min:0',
        'min_order_value' => 'nullable|numeric|min:0',
        'usage_limit' => 'nullable|integer|min:0',
        'used_count' => 'nullable|integer|min:0',
        'status' => 'required|boolean',
        'start_date' => 'nullable|date',
        'end_date' => 'nullable|date|after_or_equal:start_date',
        'description' => 'nullable|string|max:255',
    ]);

    $coupon = Coupon::findOrFail($id);

    $coupon->update([
        'code' => $request->code,
        'discount_type' => $request->discount_type,
        'discount_value' => $request->discount_value,
        'max_discount' => $request->max_discount,
        'min_order_value' => $request->min_order_value,
        'usage_limit' => $request->usage_limit,
        'used_count' => $request->used_count ?? 0,
        'status' => $request->status,
        'start_date' => $request->start_date,
        'end_date' => $request->end_date,
        'description' => $request->description,
    ]);

    return redirect()->route('admin.coupons')->with('success', 'Coupon updated successfully!');
}
public function couponAdd(){
  return view('admin.add-coupon');  
}
public function couponSave(Request $request){
    
    $request->validate([
        'code' => 'required|string|unique:coupons,code',
        'discount_type' => 'required|in:percentage,flat,fixed',
        'discount_value' => 'required|numeric',
        'max_discount' => 'nullable|numeric',
        'min_order_value' => 'nullable|numeric',
        'usage_limit' => 'nullable|integer',
        'used_count' => 'nullable|integer',
        'status' => 'required|boolean',
        'start_date' => 'nullable|date',
        'end_date' => 'nullable|date|after_or_equal:start_date',
        'description' => 'nullable|string',
    ]);

    Coupon::create($request->all());

    return redirect()->route('admin.coupons')->with('success', 'Coupon created successfully.');
}

public function destroy($id)
{
    $coupon = Coupon::find($id);

    if (!$coupon) {
        return response()->json(['error' => 'Coupon not found.'], 404);
    }

    $coupon->delete();

    return response()->json(['success' => 'Coupon deleted successfully.']);
}

}
