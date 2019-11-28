<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesController extends Controller
{
    public function get()
    {
        $client = new \GuzzleHttp\Client();
        $request = $client->get('#url')->getBody()->getContents();        
   
        $clients = json_decode($request, true);
        return view('tes', compact('clients', text));
    }
}
