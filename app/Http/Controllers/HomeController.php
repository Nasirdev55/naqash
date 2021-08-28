<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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
        $session_id = Session::get('session_id');
        $counts = Cart::where('session_id',$session_id)->count();
        dd($counts);
        return view('home',compact('sub','counts'));
    }


}
