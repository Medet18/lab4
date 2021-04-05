<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HumanController extends Controller
{
    public function index(){
        return view('human');
    }
}
