<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('pages.welcome');
    }
    public function contact()
    {
        return view('pages.contact');
    }
    public function myStory()
    {
        return view('pages.myStory');
    }
    public function gigs()
    {
        return view('pages.gigs');
    }
    public function apparel()
    {
        return view('pages.apparel');
    }
    public function forgeYourOwn()
    {
        return view('pages.forgeYourOwn');
    }
}
