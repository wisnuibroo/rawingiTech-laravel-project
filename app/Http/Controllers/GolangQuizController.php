<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GolangQuizController extends Controller
{
    public function index()
    {
        return view('golang-quiz', [
            'title' => 'Charp Quiz',
        ]);
    }

}
