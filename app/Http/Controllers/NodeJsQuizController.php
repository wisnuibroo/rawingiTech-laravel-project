<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NodeJsQuizController extends Controller
{
    public function index()
    {
        return view('nodejs-quiz', [
            'title' => 'Node js Quiz',
        ]);
    }

}
