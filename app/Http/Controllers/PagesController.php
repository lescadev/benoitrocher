<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Photo;
use App\Categories;

class PagesController extends Controller
{
    public function accueil()
    {
        $photos = Photo::select('image')->where('ajout_diapo', 1)->get()->toArray();
        $categories = Categories::select('name')->get()->toArray();

        return view('accueil',[
            'photos' => $photos,
            'categories' => $categories
        ]);
    }

    public function mentions()
    {
        $categories = Categories::select('name')->get()->toArray();
        return view('mentions',[
            'categories' => $categories
        ]);
    }

    public function contact()
    {
        $categories = Categories::select('name')->get()->toArray();
        return view('contact',[
            'categories' => $categories
        ]);
    }

    public function galerie()
    {
        $categories = Categories::select('name')->get()->toArray();
        return view ('galerie',[
            'categories' => $categories
        ]);
    }
    /*public function layout()
    {
        $categories = Categorie::select('name')->get()->toArray();
        return view ('layout',[
            'categories' => $categories
        ]);
    }*/
}
