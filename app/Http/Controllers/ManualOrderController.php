<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Yajra\DataTables\Facades\DataTables;
use App\Models\ManualOrder;


class ManualOrderController extends Controller
{
public function manualOrder(Request $request)
{
    if ($request->ajax()) {
        $query = ManualOrder::select('id', 'date', 'timing', 'receiver_name', 'contact_number', 'alternate_number')
            ->orderBy('id', 'desc');

        return DataTables::of($query)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {
                return '
                    <a href="'.route('admin.manualOrderView',$row->id).'" class="btn btn-success btn-sm">
                        View Detail
                    </a>
                ';
            })
            ->rawColumns(['action'])
            ->make(true);
    }
    return view('admin.manual-order');
}
public function manualOrderView($id){
    $manualOrderDetail = ManualOrder::find($id);
    return view('admin.manual-order-view',compact('manualOrderDetail'));
}
}
