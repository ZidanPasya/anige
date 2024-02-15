<?php

namespace App\Http\Controllers;

use App\Models\Games;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        return view('landing-page.pages.index', [
            'games' => Games::all()
        ]);
    }
}
