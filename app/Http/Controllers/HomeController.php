<?php

namespace App\Http\Controllers;

use App\Models\Profile;

class HomeController extends Controller
{
    public function __invoke()
    {
        return view('profile.index', [
            'profile' => Profile::first(),
        ]);
    }
}
