<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AiQuizController extends Controller
{
    public function index()
    {
        return view('ai-quiz', [
            'title' => 'Ai Quiz',
        ]);
    }

}
