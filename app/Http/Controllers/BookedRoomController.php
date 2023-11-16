<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ApproveRoom;
use App\Models\Phong;
use App\Models\Booking;

class BookedRoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Accept booking room
     */
    public function acceptRoom($idBooking) {
        $booking = Booking::where('id_booking', $idBooking)->first();
        $accept = Booking::where('id_booking', $idBooking)->update(['booking_status' => 1]);
        $phong = Phong::where('id_phong', $booking->id_phong)
                    -> update(['phong_status' => 2]);
        $bookingUpdated = Booking::where('id_booking', $idBooking)->first();
        Mail::to($booking->getUser->email)->send(new ApproveRoom($bookingUpdated));
        return back();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($idBooking)
    {
        $booking = Booking::find($idBooking);
        return view('admin/huyAdmin', compact('booking'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $idBooking)
    {
        $input = $request->post();
        $booking = Booking::find($idBooking);
        $ghi_chu_admin = ($request->has('ghi_chu_admin'))? ucfirst($input['ghi_chu_admin']):"";
        $booking->ghi_chu_admin = $ghi_chu_admin;
        $booking->save();
        $notAccept = Booking::where('id_booking', $idBooking)->update(['booking_status' => 2]);
        $phong = Phong::where('id_phong', $booking->id_phong)
                    -> update(['phong_status' => 0]);
        $bookingUpdated = Booking::where('id_booking', $idBooking)->first();
        Mail::to($booking->getUser->email)->send(new ApproveRoom($bookingUpdated));
        return redirect(route('admin_index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
