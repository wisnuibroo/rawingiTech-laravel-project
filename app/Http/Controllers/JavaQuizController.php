<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JavaQuizController extends Controller
{
    public function index()
    {
        return view('java-quiz', [
            'title' => 'Java Quiz',
        ]);
    }

}
