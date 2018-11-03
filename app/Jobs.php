<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
public static function getAllJobs($cat="")
{
$all_jobs=self::query();
    if($cat!=""){
        $all_jobs->where('category_id','=',$cat);
    }
    return $all_jobs->get();
}
}
