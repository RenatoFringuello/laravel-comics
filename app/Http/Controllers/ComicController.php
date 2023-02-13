<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller
{
    //
    public function index(){
        $comics = Comic::all();
        $maxBookRequested = 12;
        return view('home', compact('comics', 'maxBookRequested'));
    }
}
