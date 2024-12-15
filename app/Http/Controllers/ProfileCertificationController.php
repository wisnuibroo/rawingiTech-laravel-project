<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileCertificationController extends Controller
{
    public function index() {
        return view('profile-certification', [
            'title' => 'Profile Certification']);
    }
}
