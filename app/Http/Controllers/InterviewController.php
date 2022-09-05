<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Interview;

class InterviewController extends Controller
{
    public function index(){
        $interviews = Interview::all();

        return view('interviews.show');
    }

    public function create(){
        return view('interviews.create');
    }
}