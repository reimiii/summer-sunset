<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(Profile $profile)
    {
        return view('profile.edit', [
            'profile' => $profile
        ]);
    }

    public function update(Request $request, Profile $profile)
    {
        $validated = $request->validate([
           'body' => ['string', 'required']
        ]);

        $profile->update($validated);

        return to_route('home');
    }
}
