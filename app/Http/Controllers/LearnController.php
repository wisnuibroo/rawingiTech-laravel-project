<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Learn;

class LearnController extends Controller
{
    public function index()
    {

        return view('learn', ['title' => 'Learn']);
        return view('learn');
    }

}
