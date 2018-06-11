<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IconController extends Controller
{
    public function index()
    {
        return view('admin.icon');
    }
}
