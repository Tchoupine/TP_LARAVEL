<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('sections.index');
    }

    public function table(){
        return view('freelancer.table.index');
    }

    public function formulaire(){
        return view('freelancer.formulaire.index');
    }

    public function details(){
        return view('freelancer.details.index');
    }
}
