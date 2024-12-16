<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CsharpQuizController extends Controller
{
    public function index()
    {
        return view('csharp-quiz', [
            'title' => 'Charp Quiz',
        ]);
    }

}
