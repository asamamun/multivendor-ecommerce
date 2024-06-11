<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
    //    dd($request->roles);
        $request->validate([
            'roles' => ['required', 'string', 'in:user,vendor'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],            
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'roles' => $request->roles
        ];
        // dd($data);

        $user = User::create($data);

        event(new Registered($user));

        Auth::login($user);
        if(Auth::user()->roles == 'admin') {
            return redirect()->intended(route('admin.dashboard', absolute: false));
        }
        if(Auth::user()->roles == 'vendor') {
            return redirect()->intended(route('vendor.dashboard', absolute: false));
        }
        if(Auth::user()->roles == 'user') {
            return redirect()->intended(route('home', absolute: false));
        }

        return redirect(route('dashboard', absolute: false));
    }
}
