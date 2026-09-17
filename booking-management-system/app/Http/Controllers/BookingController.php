<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    public function index()
    {
        return view('index', ['bookings' => Booking::all()]);
    }

    public function store(Request $request)
    {
        Booking::create($request->all());
        return redirect()->back();
    }

    public function updateStatus($id, $status)
    {
        $booking = Booking::find($id);
        $booking->status = $status;
        $booking->save();

        return redirect()->back();
    }
}
