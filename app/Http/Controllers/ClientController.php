<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClientRequest;
use App\Models\Client;
use App\Models\Product;

class ClientController extends Controller
{
    public function add_client(ClientRequest $req)
    {
        $client = new Client();
        $client->phone = $req->input('phone');
        $client->name = $req->input('name');
        $client->family = $req->input('family');
        $client->save();

        $product = new Product();
        $product->title = $req->input('title');
        $product->amount = $req->input('amount');
        $client->products()->save($product);

        return redirect()->route('client-list');
    }

    public function list()
    {
        return view('client.list',['clients' => Client::all()->toJson()]);
    }
}
