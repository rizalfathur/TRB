<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThelodgeController extends Controller
{
    public function index(){
        return view('thelodge');
    }
}
