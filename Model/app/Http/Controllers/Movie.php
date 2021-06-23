<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\MyModelMovie;

class Movie extends Controller
{
    public function index() {
        $datiMovie = MyModelMovie::all();

        $datiView =[
            "productsList" => $datiMovie,
        ];

        return view("movie", $datiView);
    }
}
