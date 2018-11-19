<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'destroy']); // Only guests will see non-authenticated endpoints???
    }
    // Show page for user to login
    public function create(): object
    {
        return view('sessions.create');
    }

    // Login user
    public function store(): object
    {
        // Attempt to authenticate user
        if (!Auth::attempt(request(['username', 'password']))) {
            return back()->withErrors([
                'message' => 'Your credentials did not match, please try again!'
            ]);
            // Not authenticated, redirect back
        } else {
            return redirect()->home(); // Authenticated, redirect to home
        }
    }

    // Logout user
    public function destroy(): object
    {
        Auth::logout();
        
        return redirect()->home();
    }
}