<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Orders extends Model
{


    public static function getAllOrders()
    {
        return self::join('users', 'orders.user_id', '=', 'users.id')
            ->join('jobs', 'orders.job_id', '=', 'jobs.id')
            ->join('categories', 'jobs.category_id', '=', 'categories.id')
            ->get([
                'orders.*',
                'jobs.job_name',
                'categories.category_name',
                DB::raw('concat(first_name," ",last_name) as user_name'),
            ]);
    }

    public static function totalRevenue($status = 'paid')
    {
        return self::where('status', $status)->sum('price');
    }

    public static function totalOrders($status = '')
    {
        $total_oders = self::query();
        if ($status != '') {
            $total_oders->where('status', $status);
        }
        return $total_oders->count();

    }
}
