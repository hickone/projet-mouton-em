<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Spend;
use App\User;

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
        //$spends = Spend::all();
        $spends = Spend::orderBy('created_at', 'DESC')->paginate(env('PAGINATE', 3));
        $users = User::all();

        //echo $spends;
        return view('home', compact("spends", "users"));
    }
}
