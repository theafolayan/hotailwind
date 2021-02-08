<?php

namespace App\Http\Controllers;

use App\Models\Room;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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

    public function storeRoom( Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:300|min:3',
            'image' => 'image|required',
            'description' => 'string|required|min:30|max:3000',
            'price_per_night' => 'string|required|min:1|max:6',
            'bed_size' => 'string|required|max:10',
            'size_in_ft'=> 'string|required',
            'max_guests' => 'string|required',
        ]);
        if ($validator->fails()) {
            dd($validator->errors());
            // return redirect()->route('admin.create-room')
            // ->withErrors($validator)
            // ->withInput();
        }
        Room::create([
            'name' => $request->name,
            'image_url' => Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath(),
            'description' => $request->description,
            'price_per_night' => $request->price_per_night,
            'bed_size' => $request->bed_size,
            'size_in_ft' => $request->size_in_ft,
            'smoking_allowed'=> $request->smoking_allowed === 'on' ? 1 : 0,
            'ac_included' => $request->ac_included === 'on' ? 1 : 0,
            'pool_included' => $request->pool_included === 'on' ? 1 : 0,
        ]);
    }

}
