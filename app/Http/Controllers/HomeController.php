<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Produtos;

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
        $user = Auth::user()->responsavel()->first();
            
        $produtos = (new Produtos)->getRelacionados($user);

        return view('home',['produtos_relacionados'=>$produtos]);
    }
}
