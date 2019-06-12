<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Photo;
use App\Categories;
use App\Infosgenerale;
use App\Mention;

class PagesController extends Controller
{
    public function __construct()
    {
        $infos = Infosgenerale::select('image_logo','titre','slogan')->get()->toArray();
        config(['infos' => $infos]);
        $categories = Categories::select('name', 'slug')->where('slug', '<>', 'photo-dart')->get()->toArray();
        config(['categories' => $categories]);
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
        $mentions = Mention::select('titre','mentions')->get()->toArray();
        return view('mentions', [
            'mentions' => $mentions,
        ]);
    }

    public function contact()
    {
        return view('contact');
    }

    public function prestation($name)
    {
        $prestationPhotos = Photo::select('image', 'description')->join('categories', 'categories.id', '=', 'photos.categories_id')->where('categories.slug','=', $name)->get()->toArray();
        $prestationInfos = Categories::select()->where('categories.slug', '=', $name)->get()->toArray();
        
        return view ('prestation',[
            'prestationPhotos' => $prestationPhotos, 
            'prestationInfos' => $prestationInfos
            
        ]);

        
    }

    public function photodart()
    {
        $arts = Photo::select('image')->join('categories', 'categories.id', '=', 'photos.categories_id')->where('categories.slug', '=', 'photo-dart')->get()->toArray();
        return view ('photodart',[
            'arts' => $arts
        ]);
    }
}
