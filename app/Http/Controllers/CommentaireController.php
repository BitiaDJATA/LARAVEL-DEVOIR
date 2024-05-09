<?php

namespace App\Http\Controllers;

use App\Models\Commentaire;
use Illuminate\Http\Request;

class CommentaireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $commentaires = Commentaire::with("Internaute")->get();
        return view('adminManageComment', compact('commentaires'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('commentaires.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([]);
    
        $commentaires = new Commentaire();
        $commentaires->message = $validatedData['message'];
        $commentaires->save();
    
        return redirect()->route('commentaires.index');
    
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $commentaires = Commentaire::findOrFail($id);
        return view('commentaires.show', compact('commentaire'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $commentaires = Commentaire::findOrFail($id);
        return view('commentaires.edit', compact('commentaire'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $commentaires = Commentaire::findOrFail($id);
        $commentaires->update($request->all());
        return redirect()->route('commentaires.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $commentaires = Commentaire ::findOrFail($id);
        $commentaires->delete();
        return redirect()->route('commentaires.index');

    }
}
