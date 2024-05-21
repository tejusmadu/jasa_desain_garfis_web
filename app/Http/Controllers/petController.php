<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class petController extends Controller
{
    public function pet()
    {
    return view('pet');
    }
}
