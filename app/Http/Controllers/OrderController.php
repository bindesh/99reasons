<?php

namespace App\Http\Controllers;

use App\Orders;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class OrderController extends Controller
{
    public function index(){
        return view('orders.orders');
    }

    public function getOrderTable(){
        $all_order_data=Orders::getAllOrders();
        return DataTables::of($all_order_data)->make(true);
    }
}
