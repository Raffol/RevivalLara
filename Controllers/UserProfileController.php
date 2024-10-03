<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    public function index()
    {

        $user = Auth::user();

        return view('dashboard', compact('user'));
    }
}
