<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [];

        return view('pages.home', ['data' => $data]);
    }

    public function aboutUS()
    {
        $data = [];

        return view('pages.aboutUs', ['data' => $data]);
    }

    public function contactUs()
    {
        $data = [];

        return view('pages.contactUS', ['data' => $data]);
    }

}
