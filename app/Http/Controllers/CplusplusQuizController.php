<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CplusplusQuizController extends Controller
{
    public function index()
    {
        return view('cpp-quiz', [
            'title' => 'C++ Quiz',
        ]);
    }

}
