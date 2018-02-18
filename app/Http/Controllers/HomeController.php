<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Flower;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $flowers = Flower::orderBy('id', 'asc')->paginate(10);

        return view('/orders')->with('flowers', $flowers);
    }
}
