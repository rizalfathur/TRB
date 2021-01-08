<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TsbController extends Controller
{
    public function index(){
        return view('tsb');
    }
}
