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

    //2
    public function store(Request $request){
        // dd($request->name);
        Client::create([
            'name' => $request->name,
            'lastname' => $request->lastname,
            'age' => $request->age
        ]);
        return back();
    }
    //3 lab6 was changing$$$$$$$$$
    // public function get_client($id){
    //     $client = Client::find($id);

    //     if($client == null)
    //         return response(['message'=> 'client not found'], 404);

    
    //      return view('client.detail')->with(['client'=>$client]);   
    // }
}
