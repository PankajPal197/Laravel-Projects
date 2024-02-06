<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Onboarding extends Controller
{
    public function index()
    {
        return view('onboardingForm');
    }
}
