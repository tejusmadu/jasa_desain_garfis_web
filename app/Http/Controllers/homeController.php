<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
     public function index()
    {
    return view('home');
    }
    //public function home()
    //{
    //    return view('home');
    //}
}
