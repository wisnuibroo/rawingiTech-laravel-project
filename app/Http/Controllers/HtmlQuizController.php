<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HtmlQuizController extends Controller
{
    public function index()
    {
        return view('html-quiz', [
            'title' => 'html Quiz',
        ]);
    }

}
