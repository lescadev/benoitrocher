<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Photo;

class PagesController extends Controller
{
    public function accueil()
    {
        $photos = Photo::select('image')->where('ajout_diapo', 1)->get()->toArray();

        return view('accueil',[
            'photos' => $photos
        ]);
    }

    public function mentions()
    {
        return view('mentions');
    }

    public function contact()
    {
        return view('contact');
    }

    public function prestations()
    {
        $mariages = Photo::select('image')->where('categories_id', 1)->get()->toArray();
        return view ('prestations',[
            'mariages' => $mariages
        ]);
    }
}
