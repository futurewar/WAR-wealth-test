<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }

    public function about(){
        $title = 'Welcome to wealth! This is the about page.';
        //return view('pages.about');
        return view('pages.about')->with('title', $title);

    }

    // public function services(){
    //     return view('pages.services');
    // }

    public function value(){
        return view('pages.value');
    }

    public function philosophy(){
        return view('pages.philosophy');
    }

    public function survey(){
        return view('pages.survey');
    }

    public function results(){
        return view('pages.results');
    }

    public function journey(){
        return view('pages.journey');
    }

    public function signup(){
        return view('pages.signup');
    }

    public function signin(){
        return view('pages.signin');
    }

    public function framework(){
        return view('pages.framework');
    }
}
