<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $employes=User::with('refaral')->where('id','!=', Auth::user()->id)->get();
        

            $abc= User::with('refaral')->where('rafreance_id','=', $employes[$i]['id'])->get();
        
        dd($abc);
       
        
        
        return view('home',compact('employes', 'abc'));
    }
}
