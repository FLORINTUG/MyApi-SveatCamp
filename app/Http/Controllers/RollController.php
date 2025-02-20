<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
 

class RollController extends Controller
{
    public function index() {
        $dices = [
            'dices1' => rand(1, 6),
            'dices2' => rand(1, 6),
        ];
        return response()->json($dices);
        return $response->json();
    }

public function external() {
    $baseURL = 'https://api.unsplash.com/';
    $key = 'fDNtclCvlXO0OpWh7HvoPDVw7b6yPvSwJK6tBQS6AEw';
    $path = 'photos/random';

    $response = Http::withHeaders([
        'Authorization' => 'Client-ID ' . $key
    ]) ->get($baseURL . $path);
            return response()->json($response->json());
}

}

