<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index() {
        $title = "About";
        $name = "Anak Agung Ngurah Agung Ari Gunayasa";
        $college = "ITB STIKOM BALI";
        $mentor = "Rizky Bagus Pangestu";

        $data['title'] = $title;
        $data['name'] = $name;
        $data['college'] = $college;
        $data['mentor'] = $mentor;

        return view('about', $data);
    }
}
