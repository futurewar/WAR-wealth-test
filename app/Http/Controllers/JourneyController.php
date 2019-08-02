<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JourneyController extends Controller
{
    public function journey(){
        return view('journey.journey');
    }

    public function create(){
        return view('journey.create');
    }

    public function live(){
        return view('journey.live');
    }

    public function save(){
        return view('journey.save');
    }

    public function share(){
        return view('journey.share');
    }

    public function plan(){
        return view('journey.plan');
    }

    public function saveActivity(){
        return view('journey.saveActivity');
    }

    public function saveResults(){
        return view('journey.saveResults');
    }

    public function balanced(){
        return view('journey.balanced');
    }

    public function aggressive(){
        return view('journey.aggressive');
    }
}
