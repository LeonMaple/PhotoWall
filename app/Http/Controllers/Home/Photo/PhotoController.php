<?php

namespace App\Http\Controllers\Home\Photo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        return view('home.photo.photo');
    }

    public function single()
    {
        return view('home.photo.single');
    }

}
