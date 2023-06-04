<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRoomRequest;
use App\Http\Requests\UpdateRoomRequest;
use App\Models\Room;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rooms = Room::all();
        return view ('admin.room.index', compact('rooms'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $types = Room::roomTypes;
        $statuses = Room::roomStatus;
        return view ('admin.room.create', compact('types','statuses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRoomRequest $request)
    {
        // dd($request->all());
        $data = [
            'number' => $request->room_no,
            'type' => $request->type ?? 'standard',
            'description' => $request->description,
            'beds' => $request->beds,
            'occupancy' => $request->occupancy,
            'price_per_hour' => $request->price ?? 1000,
            'status' => $request->status ?? 'unavailable'
        ];
        Room::create($data);
        return redirect()->route('room.index');
    }

    /**
     * Display the specified resource.
     */
    // public function show(Room $room)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Room $room)
    {
        // dd($room);
        $room = Room::find($room->id);
        $types = Room::roomTypes;
        $statuses = Room::roomStatus;
        return view('admin.room.edit', compact('room','types','statuses'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRoomRequest $request, Room $room)
    {
        // dd($request->all());
        $data = [
            'number' => $request->room_no,
            'type' => $request->type ?? 'standard',
            'description' => $request->description,
            'beds' => $request->beds,
            'occupancy' => $request->occupancy,
            'price_per_hour' => $request->price ?? 1000,
            'status' => $request->status ?? 'available'
        ];
        $room->update($data);
        return redirect()->route('room.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Room $room)
    {
        // dd($room->all());
        $room = Room::find($room->id);
        $room->delete();
        return redirect()->route('room.index');
    }
}
