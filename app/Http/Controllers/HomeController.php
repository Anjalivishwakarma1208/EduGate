<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        return view('frontend.homepage');

    }

    public function about(){
        return view('frontend.aboutus');
    }

    public function contact(){
        return view('frontend.contactus');
    }

    public function bca(){
        return view('frontend.bca');
    }

    public function bsccs(){
        return view('frontend.bsccs');
    }

    public function bscit(){
        return view('frontend.bscit');
    }

    public function bscit1(){
        return view('frontend.bscit1');
    }

    public function bscit2(){
        return view('frontend.bscit2');
    }

    public function bscit3(){
        return view('frontend.bscit3');
    }

    public function bscit4(){
        return view('frontend.bscit4');
    }

    public function bscit5(){
        return view('frontend.bscit5');
    }

    public function bscit6(){
        return view('frontend.bscit6');
    }

    public function mca(){
        return view('frontend.mca');
    }

    public function mcq(){
        return view('frontend.mcq');
    }

    public function videolec(){
        return view('frontend.videolec');
    }

    public function ipvl(){
        return view('frontend.ipvl');
    }

    public function ebooks(){
        return view('frontend.ebooks');
    }

    public function science(){
        return view('frontend.science');
    }

}
