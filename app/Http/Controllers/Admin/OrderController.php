<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Order::with('user')->latest();

            return DataTables::of($data)
                ->addIndexColumn()
                ->editColumn('name', function ($row) {
                    return $row->user->name ?? 'N/A';
                })
                ->editColumn('email', function ($row) {
                    return $row->user->email ?? 'N/A';
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
