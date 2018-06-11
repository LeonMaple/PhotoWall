<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //后台首页
    public function index()
    {
        date_default_timezone_set('Asia/Shanghai');
        $date = date("Y-m-d H:i:s",time());
        return view('admin.index',[
            'date' => $date
        ]);
    }
}
