<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('landing.login'); // View login di folder landing
    }

    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        // Misalkan proses autentikasi dilakukan di sini
        $username = $request->input('username');
        $password = $request->input('password');

        // Contoh sederhana, biasanya Anda akan memeriksa username dan password dari database
        if ($username === 'admin' && $password === 'password') {
            $request->session()->put('username', $username);
            return redirect()->route('dashboard.index');
        } else {
            return back()->withErrors(['loginError' => 'Invalid username or password']);
        }
    }

    public function logout(Request $request)
    {
        $request->session()->invalidate();
        return redirect()->route('landing.index');
    }
}
