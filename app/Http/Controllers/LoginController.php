<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Employee;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Ova metoda prikazuje login formu za sve korisnike
    public function showLoginForm()
    {
        return view('login');  // Prikazivanje osnovne login stranice (može biti zajednička za sve uloge)
    }

    // Metoda za logovanje korisnika
    public function login(Request $request)
    {
        // Validacija unosa
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        $credentials = $request->only('email', 'password');  // Preuzimanje korisničkog unosa

        if (Auth::attempt($credentials)) {
            $user = Auth::user(); // Ulogovani korisnik

            // Dohvatanje svih zaposlenih bez filtera
            $projects = Project::all();
            $employees = Employee::all();
            $contacts = Contact::all(); // Dohvatiti sve kontakte


            // Preusmeravanje na odgovarajući view na osnovu uloge
            if ($user->role->name === 'admin') {
                return view('login.admin', compact('projects', 'employees', 'contacts')) // preusmeravanje na login stranicu za admina
                    ->with('success', 'Successful Login!');
            } elseif ($user->role->name === 'projectant') {
                return view('login.projectant', compact('projects', 'employees', 'contacts')) // preusmeravanje na login stranicu za projektanta
                    ->with('success', 'Successful Login!');
            } else {
                
                return view('login.client', compact('projects', 'employees', 'contacts')) // preusmeravanje na login stranicu za klijenta
                    ->with('success', 'Successful Login!');
            }
        }

        // Ako login nije uspešan, vraćamo grešku
        return redirect()->back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }


    // Metoda za odjavu
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');  // Preusmeravanje na početnu stranicu
    }
}
