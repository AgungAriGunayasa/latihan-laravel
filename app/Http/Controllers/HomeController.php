<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $title = "Home";
        $intro = "Latihan Laravel Controller & View";

        $data['title'] = $title;
        $data['intro'] = $intro;

        return view('home', $data);
    }
}
