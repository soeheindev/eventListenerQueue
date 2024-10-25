<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\UserRegistered;
use App\Models\User;

class UserController extends Controller
{
    public function store(Request $request)
    {
        // Create a new user
        
        $user = User::create($request->all());

        // Fire the UserRegistered event
        event(new UserRegistered($user));

        return response()->json(['message' => 'User registered successfully']);
    }
}
