<?php

namespace App\Http\Controllers;

use App\Spend;
use App\User;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function __construct(){
        view()->composer('history', function($view){
            $users = User::all();
            $view->with('users', $users);

        });

        $this->middleware('auth');
    }
 

    public function index()
    {
        $spends = Spend::paginate(10);
        return view('history', compact('spends'));
    }
}
