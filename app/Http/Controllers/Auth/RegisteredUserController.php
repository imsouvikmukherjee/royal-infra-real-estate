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
        $title = "Register";
        return view('auth.register', ['title' => $title]);
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'contact' => ['required', 'string', 'max:15'], // Assuming it's an optional contact number
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'usertype' => ['required', 'integer', 'in:1,2,3,4'], // Ensuring it's one of the allowed values
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'contact' => $request->contact,
            'password' => Hash::make($request->password),
            'usertype' => $request->usertype,
            // 'created_at' => now();
        ]);

        // event(new Registered($user));

        // Auth::login($user);

        // return redirect(route('admin_dashboard', absolute: false));
        return redirect()->route('partner_payment')->with('success','Registration successful! You can log in once your account is activated');
    }
}
