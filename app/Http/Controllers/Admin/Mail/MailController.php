<?php

namespace App\Http\Controllers\Admin\Mail;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MailController extends Controller
{
    public function index()
    {
        return view('admin.mail');
    }
}
