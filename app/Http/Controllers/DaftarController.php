<?php

namespace App\Http\Controllers;

use App\Models\daftar;
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
        $daftar = DB::select("SELECT * FROM `daftars`");
        return view("index", [
            'daftar' => $daftar
        ]);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'title' => 'required|max:255',
            'genre' => 'required|max:100',
            'description' => 'max:65535',
            'year' => 'required|integer|min:2020|max:2099',
            'rating' => 'required|numeric|min:1|max:10',
        ]);
        $daftar = new daftar();
        $daftar->title = $validateData['title'];
        $daftar->genre = $validateData['genre'];
        $daftar->description = $validateData['description'];
        $daftar->year = $validateData['year'];
        $daftar->rating = $validateData['rating'];
        $daftar->save();
        $request->session()->flash('success', "Successfully adding {$validateData['title']}!");
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
            'title' => 'required|max:255',
            'genre' => 'required|max:100',
            'description' => 'max:65535',
            'year' => 'required|integer|min:1900|max:2099',
            'rating' => 'required|numeric|min:1|max:10',
        ]);
        $daftar->update($validateData);
        $request->session()->flash('success', "Successfully updating {$validateData['title']}!");
        return redirect()->route('daftar.index');
    }

    public function destroy(daftar $daftar)
    {
        $daftar->delete();
        return redirect()->route('daftar.index')->with('success', "Successfully deleting {$daftar['title']}!");
    }


    public function formDaftar()
    {
        return view('formDaftar');
    }
}
