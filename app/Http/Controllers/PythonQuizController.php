<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PythonQuizController extends Controller
{
    public function index()
    {
        return view('python-quiz', [
            'title' => 'Python Quiz',
        ]);
    }

}
