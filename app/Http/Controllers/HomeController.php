<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HomeController extends Controller
{
    public function cards_get()
    {
        $cards = Card::all()->toArray();
        return $cards;
    }
}
