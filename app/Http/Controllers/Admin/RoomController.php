<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index()
    {
        $rooms = Room::latest()->paginate(10);
        return view('admin.rooms.index', compact('rooms'));
    }

    public function create()
    {
        return view('admin.rooms.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'nullable|string|max:255',
            'capacity' => 'required|integer|min:1',
            'facilities' => 'nullable|string',
            'is_active' => 'boolean',
        ]);

        Room::create([
            'name' => $request->name,
            'location' => $request->location,
            'capacity' => $request->capacity,
            'facilities' => $request->facilities,
            'is_active' => $request->has('is_active'),
        ]);

        return redirect()->route('admin.rooms.index')->with('success', 'Ruangan berhasil ditambahkan.');
    }

    public function edit(Room $room)
    {
        return view('admin.rooms.edit', compact('room'));
    }

    public function update(Request $request, Room $room)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'location' => 'nullable|string|max:255',
            'capacity' => 'required|integer|min:1',
            'facilities' => 'nullable|string',
            'is_active' => 'boolean',
        ]);

        $room->update([
            'name' => $request->name,
            'location' => $request->location,
            'capacity' => $request->capacity,
            'facilities' => $request->facilities,
            'is_active' => $request->has('is_active'),
        ]);

        return redirect()->route('admin.rooms.index')->with('success', 'Ruangan berhasil diperbarui.');
    }

    public function destroy(Room $room)
    {
        $room->delete();
        return redirect()->route('admin.rooms.index')->with('success', 'Ruangan berhasil dihapus.');
    }
}
