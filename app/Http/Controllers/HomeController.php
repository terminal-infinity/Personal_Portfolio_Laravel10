<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // index method
    public function index(){

        return view('frontend.pages.index');
    }



}
