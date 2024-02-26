<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $title = 'Laravel Model Controller';

        return view('welcome', compact('title'));
    }

    public function about() {
        return view('subpages.about');
    }
}