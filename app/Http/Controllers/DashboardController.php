<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing as Listing;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('dashboard',[
            'listings' => Listing::orderBy('last_activated_at', 'DESC')->get()
        ]);
    }

    public function showProfile() {
        return view('profile');
    }

    public function showProfileEdit() {
        return view('editprofile');
    }
}
