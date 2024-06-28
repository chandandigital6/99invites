<?php

namespace App\Http\Controllers;


use App\Models\Banner;
use App\Models\Card;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $banners=Banner::all();
        $cards=Card::all();
        return view('index',compact('banners','cards'));
    }

    public function card_1()
    {
        return view('card_1');
    }
    public function card_2()
    {
        return view('card_2');
    }
    public function card_3()
    {
        return view('card_3');

    }

}
