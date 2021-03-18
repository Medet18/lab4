<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//
use App\Models\Client;

class ApiController extends Controller
{
    //This function return that all client rows
    //1
    public function index(Request $request){
        $client = Client::all();

        return response($client, 200);
    }
    //Return client with client_id
    //2
    public function get_client(Request $request){
        $client = Client::find($request-> client_id);

        if($client == null){
            return response(['message' => 'There is no client'], 404);
        }

        return response($client,200);
    }
}
