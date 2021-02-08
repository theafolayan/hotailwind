<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function showDashboard()
    {
        return view('admin.dashboard');
    }
    public function fetchRooms()
    {
       return view('admin.rooms');
    }
    public function createRoom()
    {
        return view('admin.create-room');
    }
    public function showRooms()
    {
        $rooms = Room::paginate(9);
        return view('admin.rooms')->with('rooms', $rooms);
    }

    public function storeRoom()
    {

    }

}
