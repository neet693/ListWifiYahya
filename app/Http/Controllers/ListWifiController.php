<?php

namespace App\Http\Controllers;

use App\Exports\ExportListWifi;
use App\Imports\ImportListWifi;
use App\Models\ListWifi;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use DataTables;

class ListWifiController extends Controller
{

    //Import Function
    public function import(Request $request)
    {
        if ($request->file('imported_file')) {
            Excel::import(new ImportListWifi(), request()->file('imported_file'));
            return back();
        }
    }

    //Export Function
    public function export()
    {
        return Excel::download(new ExportListWifi(), 'listwifi.xlsx');
    }

    //Yajra Datatable
    public function getWifi(Request $request)
    {
        if ($request->ajax()) {
            $data = ListWifi::latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }

    public function index()
    {
        $wifi = ListWifi::all();
        return view('listwifi', compact(
            'wifi'
        ));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }

    public function show(ListWifi $listWifi)
    {
        //
    }

    public function edit(ListWifi $listWifi)
    {
        //
    }

    public function update(Request $request, ListWifi $listWifi)
    {
        //
    }

    public function destroy()
    {
        $wifi = ListWifi::query()->delete();

        return redirect('/')->with('success', 'List Wifi berhasil di hapus');
    }
}
