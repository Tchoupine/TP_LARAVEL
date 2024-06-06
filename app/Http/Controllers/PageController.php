<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('index');
    }

    public function table(){
        return view('freelancer.table');
    }

    public function formulaire(){
        return view('freelancer.formulaire');
    }

    public function details(){
        return view('freelancer.details');
    }
}
