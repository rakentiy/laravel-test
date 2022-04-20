<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CurrencyController extends Controller
{
    public function load() {
        $client = new \GuzzleHttp\Client();

        $response = $client->request('GET', 'https://openexchangerates.org/api/currencies.json');

        if($response->getStatusCode() == 200) {

            $content = json_decode($response->getBody(), true);

            $callback = fn(string $k, string $v): array => ["short_name" => $k, "country" => $v];
            $data = array_map($callback, array_keys($content), array_values($content));

            DB::table('currencies')->insert($data);
        }

        return redirect()->route('currency-list');
    }

    public function list()
    {
        return view('currency.list',['currencies' => Currency::all()->toJson()]);
    }
}
