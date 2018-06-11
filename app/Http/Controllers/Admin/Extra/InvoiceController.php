<?php

namespace App\Http\Controllers\Admin\Extra;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InvoiceController extends Controller
{
    public function index()
    {
        return view('admin.invoice');
    }
}
