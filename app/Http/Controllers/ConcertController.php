<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConcertController extends Controller
{
    public function index()
    {
        return view('FrontEnd/index');
    }
}