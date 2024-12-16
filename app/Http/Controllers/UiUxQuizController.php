<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UiUxQuizController extends Controller
{
    public function index()
    {
        return view('uiux-quiz', [
            'title' => 'UiUx Quiz',
        ]);
    }

}
