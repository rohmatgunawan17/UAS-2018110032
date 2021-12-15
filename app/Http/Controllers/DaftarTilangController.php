<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\daftar_tilang;
use DataTables;

class DaftarTilangController extends Controller
{
    public function index()
    {
        return view('DaftarTilang');
    }


    public function getDaftarTilangs(Request $request)
    {
        if ($request->ajax()) {
            $data = daftar_tilang::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }
}
