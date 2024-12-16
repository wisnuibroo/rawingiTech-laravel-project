<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RubyQuizController extends Controller
{
    public function index()
    {
        return view('ruby-quiz', [
            'title' => 'Python Quiz',
        ]);
    }

}
