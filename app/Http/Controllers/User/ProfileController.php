<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show($username)
    {
        $user = User::where('username', $username)
            ->select(['id', 'name', 'username', 'created_at'])
            ->firstOrFail();
        return view('user.profile', compact('user'));
    }
} 