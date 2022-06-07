<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminBookingController extends Controller
{
    //
    public function index()
    {
        return view("admin/booking/index");
    }

    public function add()
    {
        return view("admin.booking.bookingadd");
    }

    public function edit()
    {
        return view("admin.booking.bookingedit");
    }
}
