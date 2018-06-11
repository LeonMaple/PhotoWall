<?php

namespace App\Http\Controllers\Admin\Extra;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ErrorController extends Controller
{
    public function notfound()
    {
        return view('admin.404');
    }

    public function server()
    {
        return view('admin.500');
    }

}
