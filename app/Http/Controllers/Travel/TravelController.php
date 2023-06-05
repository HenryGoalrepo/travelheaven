<?php

namespace App\Http\Controllers\Travel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TravelController extends Controller
{
    public function home(){
        return view('travels.variety.homeone');
    }

    public function destination(){
        return view('travels.destinations');
    }

    public function gallery(){
        return view('travels.gallery');
    }


    public function tour(){
        return view('travels.variety.tourone');
    }

    public function about(){
         return view('travels.about');
    }

    public function blogless(){
        return view('travels.variety.blogless');
    }

    public function contact(){
        return view('travels.contact');
    }
}
