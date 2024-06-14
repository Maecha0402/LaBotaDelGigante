<?php
// app/Http/Controllers/DashboardReservationController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\Room;

class DashboardReservationController extends Controller
{
    public function index()
    {
        $reservations = Reservation::with('room')->get();
        return view('dashboard.reservations.index', compact('reservations'));
    }

    public function create()
    {
        $rooms = Room::all();
        return view('dashboard.reservations.create', compact('rooms'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'room_id' => 'required|exists:rooms,id',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'num_guests' => 'required|integer|min:1|max:5',
            'arrival_date' => 'required|date|after_or_equal:today',
            'arrival_time' => 'required',
            'departure_date' => 'required|date|after:arrival_date',
            'special_request' => 'nullable|string',
        ]);

        $data = $request->all();
        $data['status'] = 'active';

        Reservation::create($data);

        return redirect()->route('dashboard.reservations.index')->with('success', 'Reservación creada con éxito.');
    }

    public function show($id)
    {
        $reservation = Reservation::with('room')->findOrFail($id);
        return view('dashboard.reservations.show', compact('reservation'));
    }

    public function edit($id)
    {
        $reservation = Reservation::findOrFail($id);
        $rooms = Room::all();
        return view('dashboard.reservations.edit', compact('reservation', 'rooms'));
    }

    public function update(Request $request, $id)
    {
        $reservation = Reservation::findOrFail($id);

        $request->validate([
            'room_id' => 'required|exists:rooms,id',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'num_guests' => 'required|integer|min:1|max:5',
            'arrival_date' => 'required|date|after_or_equal:today',
            'arrival_time' => 'required',
            'departure_date' => 'required|date|after:arrival_date',
            'special_request' => 'nullable|string',
        ]);

        $reservation->update($request->all());

        return redirect()->route('dashboard.reservations.index')->with('success', 'Reservación actualizada con éxito.');
    }

    public function destroy($id)
    {
        $reservation = Reservation::findOrFail($id);
        $reservation->delete();

        return redirect()->route('dashboard.reservations.index')->with('success', 'Reservación eliminada con éxito.');
    }
}
