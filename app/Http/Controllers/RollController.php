<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 

class RollController extends Controller
{
    public function index() {
        $dices = [
            'dices1' => rand(1, 6),
            'dices2' => rand(1, 6),
        ];
        return response()->json($dices);
    }
};

