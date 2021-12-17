<?php

namespace App\Http\Controllers;

use App\Models\barang_bukti;
use App\Models\Daftar;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class DaftarController extends Controller
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
    public function daftar()
    {
        $daftar = DB::select("SELECT * FROM `daftars`");
        return view("daftar", [
            'daftar' => $daftar
        ]);
    }

    public function index()
    {
        $daftar = DB::table('daftars')->paginate(1);
        return view("index", [
            'daftar' => $daftar
        ]);
    }

    public function create()
    {
        $bukti = barang_bukti::all();
        // dd($bukti);
        return view('create', compact('bukti'));
    }


    // public function selectsector() //this is the dropdown #1 that works fine
    // {
    //     $buktis = DB::table('barang_buktis')->whereBetween('id', [1, 10])->value('nama');
    //     return view('create', ['buktis' => $buktis]);
    // }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'barang_bukti' => 'max:200',
            'no' => 'required|max:200',
            'nama' => 'required|max:200',
            'alamat' => 'required|max:200',
            'tanggal_tilang' => 'required|max:200',
            'tanggal_sidang' => 'required|max:200',
            'pelanggaran' => 'required|max:200',
            'total_denda' => 'required|integer|max:2500000',
            'tempat_sidang' => 'max:200',
            'status_penilangan' => 'max:200',
            'pelaku' => 'file|image|max:5000',
        ]);
        // dd($validateData);
        // $daftar->save();

        $daftar = daftar::create($validateData);
        $fileExtension = $request->pelaku->getClientOriginalExtension();
        $fileRename = "img-" . time() . ".{$fileExtension}";
        $request->pelaku->storeAs('public', $fileRename);
        $daftar->pelaku = $fileRename;
        // dd($daftar->pelaku);
        $daftar->save();





        $request->session()->flash('success', "Successfully adding {$validateData['nama']}!");
        return redirect()->route('daftar.index');
    }

    public function show(daftar $daftar)
    {
        return view('show', compact('daftar'));
    }

    public function edit(daftar $daftar)
    {
        // dump($daftar);
        return view('edit', compact('daftar'));
    }
    public function update(Request $request, daftar $daftar)
    {
        $validateData = $request->validate([
            'barang_bukti' => 'required|max:200',
            'no' => 'required|max:200',
            'nama' => 'required|max:200',
            'alamat' => 'required|max:200',
            'tanggal_tilang' => 'required|max:200',
            'tanggal_sidang' => 'required|max:200',
            'pelanggaran' => 'required|max:200',
            'total_denda' => 'required|integer|max:2500000',
            'tempat_sidang' => 'max:200',
            'status_penilangan' => 'max:200',
            // 'pelaku' => 'file|image|max:5000',
        ]);
        $daftar->update($validateData);
        $request->session()->flash('success', "Successfully updating {$validateData['nama']}!");
        return redirect()->route('daftar.index');
    }

    public function destroy(daftar $daftar)
    {
        $daftar->delete();
        return redirect()->route('daftar.index')->with('success', "Successfully deleting {$daftar['title']}!");
    }

    public function imageUpload(Request $request)
    {
        if ($request->hasFile('image')) {
            echo "Path: " . $request->image->path() . '<br>';
            echo "Extension: " . $request->image->extension() . '<br>';
            echo "Org. Extension: " . $request->image->getClientOriginalExtension() . '<br>';
            echo "MIME Type: " . $request->image->getMimeType() . '<br>';
            echo "Org. Filename: " . $request->image->getClientOriginalName() . '<br>';
            echo "Size: " . $request->image->getSize() . '<br>';
        } else {
            echo "No uploaded file!";
        }
    }


    public function search()
    {
        $search = $_GET['search'];
        $daftars = DB::select("SELECT * FROM `daftars`WHERE `name` LIKE '%$search%' OR `no_stnk_sim` LIKE '$search'");
        return view("search", [
            'daftars' => $daftars
        ]);
    }
}
