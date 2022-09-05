<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Drama;

class DramaController extends Controller
{
    public function index(){
        $dramas = Drama::all();

        return view('dramas.show');
    }

    public function create(){
        return view('dramas.create');
    }
}
