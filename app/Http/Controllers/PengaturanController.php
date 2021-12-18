<?php

namespace App\Http\Controllers;

use App\Models\barang_bukti;
// use App\Models\Daftar;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class PengaturanController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        $bukti = barang_bukti::all();
        return view("Pengaturan.index", compact('bukti'));
    }

    public function create()
    {
        // $bukti = barang_bukti::all();
        // dd($bukti);
        return view('pengaturan.create');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama' => 'required|max:200',
            'keterangan' => 'required|max:200',
        ]);
        // dd($validateData);
        // $daftar->save();

        $barang_bukti = barang_bukti::create($validateData);
        $barang_bukti->save();
        $request->session()->flash('success', "Berhasil Menambahkan data {$validateData['nama']} !!");
        return redirect()->route('pengaturan.index');
    }



    public function destroy(barang_bukti $barang_bukti)
    {
        $barang_bukti->delete();
        return redirect()->route('daftar.index')->with('success', "Successfully deleting {$barang_bukti['nama']}!");
    }

    public function create2()
    {
        // $bukti = barang_bukti::all();
        // dd($bukti);
        return view('pengaturan.create2');
    }



    public function destroy2(barang_bukti $barang_bukti)
    {
        $barang_bukti->delete();
        return redirect()->route('pengaturan.index')->with('success', "Successfully deleting {$barang_bukti['nama']}!");
    }
}
