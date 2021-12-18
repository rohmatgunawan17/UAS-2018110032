<?php

namespace App\Http\Controllers;

use App\Models\Daftar;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
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
        $daftar = DB::select("SELECT * FROM `daftars`");
        return view("home", compact('daftar'));
    }
    public function search()
    {
        $search = $_GET['search'];
        $daftar = DB::select("SELECT * FROM `daftars`WHERE `nama` LIKE '%$search%' OR `no` LIKE '%$search%'");
        return view("search", compact('daftar'));
    }
}
