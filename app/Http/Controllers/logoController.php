<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class logoController extends Controller
{
    public function logo()
    {
    return view('logo');
    }
}
