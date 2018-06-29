<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class photo_category extends Model
{
    public static function queryAll()
    {
        $result = DB::table('photo_category')->get();

        $data = [];
        foreach ($result as $value) {
            $data[$value->id] = $value;
        }

        return $data;

    }

}
