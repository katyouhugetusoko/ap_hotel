<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Masuta;


class MasutaController extends Controller
{
    public function index()
    {
        $items = Masuta::all();

        return view('masuta.index',['items' => $items]);
    }
}


