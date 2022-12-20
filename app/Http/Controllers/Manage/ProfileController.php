<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\Controller;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function index(Profile $profile)
    {
        return view('profile.edit', [
            'profile' => $profile
        ]);
    }
}
