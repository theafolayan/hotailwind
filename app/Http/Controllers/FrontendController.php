<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function getRooms()
    {
        $rooms = Room::paginate(20);
        return view('listing')->with('rooms', $rooms);
    }
}
