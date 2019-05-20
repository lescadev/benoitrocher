<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function accueil()
    {
        return view('accueil');
    }

    public function mentions()
    {
        return view('mentions');
    }

    public function contact()
    {
        return view('contact');
    }
}
