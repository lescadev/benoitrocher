<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Photo;
use App\Infosgenerale;

class PagesController extends Controller
{
    public function __construct()
    {
        $infos = Infosgenerale::select('image_logo','titre','slogan')->get()->toArray();
        config(['infos' => $infos]);
    }



    public function accueil()
    {
        $photos = Photo::select('image')->where('ajout_diapo', 1)->get()->toArray();

        return view('accueil',[
            'photos' => $photos,
        ]);
    }

    public function mentions()
    {
        return view('mentions',[
        ]);
    }

    public function contact()
    {
        return view('contact',[
        ]);
    }

    public function galerie()
    {
        return view ('galerie',[
        ]);
    }

    public function prestation()
    {
        $prestationPhotos = Photo::select('image')->join('categories', 'categories.id', '=', 'photos.categories_id')->where('categories.name','=', 'Mariage')->get()->toArray();
        return view ('prestation',[
            'prestationPhotos' => $prestationPhotos
        ]);
    }

    public function photodart()
    {
        $arts = Photo::select('image')->join('categories', 'categories.id', '=', 'photos.categories_id')->where('categories.name', '=', 'photodart')->get()->toArray();
        return view ('photodart',[
            'arts' => $arts
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
