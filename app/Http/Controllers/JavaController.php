<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JavaController extends Controller
{
    public function index()
    {
        return view('java', [
            'title' => 'Java',
        ]);
    }

}
