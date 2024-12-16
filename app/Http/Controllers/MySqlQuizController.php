<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MySqlQuizController extends Controller
{
    public function index()
    {
        return view('mysql-quiz', [
            'title' => 'My SQL Quiz',
        ]);
    }

}
