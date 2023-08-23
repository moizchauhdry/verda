<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('pages.about-us');
    }

    public function projects()
    {
        return view('pages.projects');
    }

    public function blogs()
    {
        return view('pages.blogs');
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
