<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use App\Models\Query;

class QueryController extends Controller
{
public function queryList(Request $request)
{
    if ($request->ajax()) {
        $query = Query::select('id', 'weight', 'reference_photo', 'details', 'receiver_name', 'contact_number', 'city', 'date_time')
            ->orderBy('id', 'desc');

        return DataTables::of($query)
            ->addIndexColumn()
            ->editColumn('reference_photo', function ($row) {
                if ($row->reference_photo) {
                    $url = asset('query-document/' . $row->reference_photo); // Make sure path is correct
                    return '<a href="' . $url . '" target="_blank">
                                <img src="' . $url . '" height="50" width="50" style="object-fit:cover; border-radius:4px;" />
                            </a>';
                }
                return '';
            })
            ->editColumn('details', function ($row) {
                return '<div style="white-space: normal;">' . e($row->details) . '</div>';
            })
            ->rawColumns(['reference_photo', 'details']) // only these two need HTML rendering
            ->make(true);
    }

    return view('admin.query');
}
}



// public function manualOrder(Request $request)
// {
//     if ($request->ajax()) {
//         $query = ManualOrder::select('id', 'date', 'timing', 'receiver_name', 'contact_number', 'alternate_number')
//             ->orderBy('id', 'desc');

//         return DataTables::of($query)
//             ->addIndexColumn()
//             ->addColumn('action', function ($row) {
//                 return '
//                     <a href="'.route('admin.manualOrderView',$row->id).'" class="btn btn-success btn-sm">
//                         View Detail
//                     </a>
//                 ';
//             })
//             ->rawColumns(['action'])
//             ->make(true);
//     }
//     return view('admin.manual-order');
// }
// public function manualOrderView($id){
//     $manualOrderDetail = ManualOrder::find($id);
//     return view('admin.manual-order-view',compact('manualOrderDetail'));
// }