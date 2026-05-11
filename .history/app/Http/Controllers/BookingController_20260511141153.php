<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Room;
use App\Models\Guest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::with('room')->latest()->get();
        return view('bookings.index', compact('bookings'));
    }

    public function create()
    {
        $rooms = Room::where('status', 'available')->get();
        return view('bookings.create', compact('rooms'));
    }

    public function store(Request $request)
    {
         $request->validate([
        'room_id' => 'required',
        'guest_name' => 'required',
        'guest_email' => 'nullable|email',
        'guest_phone' => 'required',
        'check_in' => 'required|date',
        'check_out' => 'required|date|after_or_equal:check_in',
    
    ]);

    // 1. Create guest
    $guest = Guest::create([
        'name' => $request->guest_name,
        'email' => $request->guest_email,
        'phone' => $request->guest_phone,
    ]);

    // 2. Create booking
    Booking::create([
        'room_id' => $request->room_id,
        'user_id' => Auth::id(),   // STAFF WHO BOOKED
        'guest_id' => $guest->id,  // CUSTOMER
        'check_in' => $request->check_in,
        'check_out' => $request->check_out,
        'status' => 'confirmed'
    ]);

     //  UPDATE ROOM STATUS → OCCUPIED
    Room::where('id', $request->room_id)
        ->update(['status' => 'occupied']);


    return redirect()->route('bookings.index')
        ->with('success', 'Booking created successfully');
    }

    public function edit($id)
{
    $booking = Booking::with('guest')->findOrFail($id);
    $rooms = Room::all();

    return view('bookings.edit', compact('booking', 'rooms'));
}

    public function update(Request $request, $id)
    {
        $booking = Booking::findOrFail($id);

        $booking->update($request->all());

        return redirect()->route('bookings.index');
    }


    //booking cansel function
    public function destroy($id)
    {
        $booking = Booking::findOrFail($id);

    //  FREE THE ROOM
    Room::where('id', $booking->room_id)
        ->update(['status' => 'available']);

    $booking->delete();

    return redirect()->route('bookings.index')
        ->with('success', 'Booking cancelled successfully');

        return redirect()->route('bookings.index');
    }
}