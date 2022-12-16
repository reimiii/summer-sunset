<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Providers\RouteServiceProvider;

class AuthenticatedController extends Controller
{
    public function store(LoginRequest $request)
    {
        $request->authenticated();

        $request->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::HOME);
    }
}