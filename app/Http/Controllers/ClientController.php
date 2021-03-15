<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//1
use App\Models\Client;

class ClientController extends Controller
{
    public function index(){
        $clients = Client::all();

        return view('client.index')->with(['clients' => $clients]);
    }
}
