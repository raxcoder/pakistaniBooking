<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function index()
    {
        $data = [];

        return view('pages.hotels', ['data' => $data]);
    }

    public function hotelRooms()
    {
        return view('pages.hotelRooms');
    }


    public function roomDetail()
    {
        return view('pages.roomDetail');
    }

}
