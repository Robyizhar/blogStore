<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('content');
    }
    // public function about(){
    //     return view('about', ['name' => 'Robby Izhar Ramadhana']);
    // }
}