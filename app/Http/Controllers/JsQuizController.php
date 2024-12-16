<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JsQuizController extends Controller
{
    public function index()
    {
        return view('js-quiz', [
            'title' => 'Js Quiz',
        ]);
    }

}
