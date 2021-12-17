<?php

namespace App\Http\Controllers;

use App\Models\barang_bukti;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BarangBuktiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $bukti = isset($_GET['barang_bukti']) ? $_GET['barang_bukti'] : null;
        // also can use this structure $filter = isset($_GET['filter']) ?? null;
        // $bukti = DB::table('daftars')
        //     ->rightJoin('barang_buktis', 'barang_buktis.id', '=', 'daftars.barang_bukti');
        // $bukti = $bukti->get();

        // return view('create', ['bukti' => $bukti]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\barang_bukti  $barang_bukti
     * @return \Illuminate\Http\Response
     */
    public function show(barang_bukti $barang_bukti)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\barang_bukti  $barang_bukti
     * @return \Illuminate\Http\Response
     */
    public function edit(barang_bukti $barang_bukti)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\barang_bukti  $barang_bukti
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, barang_bukti $barang_bukti)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\barang_bukti  $barang_bukti
     * @return \Illuminate\Http\Response
     */
    public function destroy(barang_bukti $barang_bukti)
    {
        //
    }
}
