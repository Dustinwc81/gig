<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Control all the Static Pages
    public function getWelcome()
    {
        return view('pages.welcome');
    }

    public function getContact()
    {
        return view('pages.contact');
    }

    public function getMyStory()
    {
        return view('pages.myStory');
    }








    public function checkOut()
    {
        return view('pages.checkOut');
    }
}
