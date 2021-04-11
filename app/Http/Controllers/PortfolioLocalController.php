<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//1
use Illuminate\Support\Facades\App;


class PortfolioLocalController extends Controller
{
    public function localization($locale){
        App::setLocale($locale);
        return view("portfolioLocale");
    }
}
