<?php

namespace App\Http\Controllers;

use App\Models\Internaute;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
class InternauteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $internautes = Internaute::all();
        return view('internautes.index', compact('internaute'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('internautes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
           
        ]);
    
        $internautes = new Internaute();
        $internautes->nom = $validatedData['nom'];
        $internautes->prenom = $validatedData['prenom'];
        $internautes->password = $validatedData['password'];
        $internautes->save();
    
        return redirect()->route('internautes.index');
    
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $internautes = Internaute::findOrFail($id);
        return view('internautes.show', compact('internaute'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $internautes = Internaute::findOrFail($id);
        return view('internautes.edit', compact('internaute'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $internautes = Internaute::findOrFail($id);
        $internautes->update($request->all());
        return redirect()->route('internautes.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    


    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        // Rechercher l'utilisateur en base de données
        $user = Internaute::where('email', $credentials['email'])->first();
    
        if (!$user) {
            // Utilisateur non trouvé
            return back()->withErrors([
                'email' => 'Aucun utilisateur correspondant trouvé.',
            ]);
        }
    
        // Vérifier le mot de passe manuellement
        if (password_verify($credentials['password'], $user->password)) {
            
            Auth::login($user);
            Cache::put('userData', $user);
            return redirect()->route('index.blade');
        }

        return back()->withErrors([
            'email' => 'Les informations de connexion fournies sont incorrectes.',
        ]);
    }

    public function signUp(Request $request)
    {
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|email|unique:internautes',
            'password' => 'required|min:6',
        ]);

        $internaute = Internaute::create([
            'nom' => $validatedData['nom'],
            'prenom' => $validatedData['prenom'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']), // Utilisation de bcrypt pour sécuriser le mot de passe
        ]);

        return redirect()->route('login'); // Redirection après l'inscription réussie
    }

}
