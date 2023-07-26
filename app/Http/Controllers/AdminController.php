<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Method to show all users
    public function index() {
        $users = User::all();

        return view('admin.index', [
            'users' => $users
        ]);
    }

    public function show(User $user)
    {
        // Check if the authenticated user is an admin
        if (!auth()->user()->isAdmin()) {
            abort(403, 'Unauthorized Action');
        }

        // Return the admin view with the user
        return view('admin.show', compact('user'));
    }
}
