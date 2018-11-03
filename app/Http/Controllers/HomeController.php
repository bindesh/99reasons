<?php

namespace App\Http\Controllers;

use App\Orders;
use App\User;
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $total_revenue=Orders::totalRevenue();
        $total_orders=Orders::totalOrders();
        $totalEmployees=User::totalEmployees();
        return view('home',compact('total_orders','total_revenue','totalEmployees'));
    }
}
