<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Address;
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

        $Empdata = Employee::all()->toArray();
        return view('home',compact('Empdata'));
    }
}
