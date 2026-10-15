<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterUserRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class RegisteredUserController extends Controller
{
    public function store(RegisterUserRequest $request): RedirectResponse
    {
        $data = $request->safe()->only([
            'name',
            'document_type',
            'document_number',
            'phone',
            'email',
            'password'
        ]);

        $user = User::create($data);

        Auth::login($user);
        $request->session()->regenerate();

        return redirect('/')->with('status', 'Tu cuenta se creó correctamente');
    }
}
