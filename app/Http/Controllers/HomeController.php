<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mopo as Mopol;

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
        $mopol = Mopol::all();
        return view('home')->withMopol($mopol);
    }
}
