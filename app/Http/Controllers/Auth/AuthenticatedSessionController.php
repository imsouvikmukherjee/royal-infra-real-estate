<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {   $title = "Login";
        return view('auth.login',['title' => $title]);
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        $request->session()->put('name', $request->user()->name);
        $request->session()->put('email', $request->user()->email);
        $request->session()->put('usertype', $request->user()->usertype);

        if ($request->user()->status == '0') {
            Auth::guard('web')->logout();
            return redirect()->back()->withErrors([
                'error' => 'You are unable to log in at this time as your approval is still pending.',
            ]);
        }

        return redirect()->intended(route('admin_dashboard', absolute: false));
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        $request->session()->forget('usertype');
        $request->session()->forget('name');
        $request->session()->forget('email');

        return redirect('/');
    }
}
