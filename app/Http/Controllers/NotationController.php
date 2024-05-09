<?php

namespace App\Http\Controllers;

use App\Models\Commentaire;
use App\Models\Notation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $notations = Notation::all();
        return view('adminNotation', compact('notations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('notations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dd($request);
        $validatedData = $request->validate([
            'qualitEns' => 'required|numeric|max:5',
            'infrastructure' => 'required|numeric|max:5',
            'recherche' => 'required|numeric|max:5',
            'isertionPro' => 'required|numeric|max:5',
            'universityies_id' => 'required|exists:universities,id',
            'internautes_id'=> ['internautes_id' => Auth::id()]
        ]);
    
        $notations = new Notation();
        $notations->qualiteEns = $validatedData['qualitEns'];
        $notations->infrastructure = $validatedData['infrastructure'];
        $notations->recherche = $validatedData['recherche'];
        $notations->isertionPro = $validatedData['isertionPro'];
        $notations->university_id = $validatedData['universityies_id'];
        $notations->internaute_id = Auth::id();
        $notations->save();

        $comment= new Commentaire();
        $comment->message=$request->message;
        $comment->save();
    
        return redirect()->route('notations.index');
    }

    public function redirectionVers(){
        return view("index");
    }
    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $notations = Notation::findOrFail($id);
        return view('notations.show', compact('notation'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $notations = Notation::findOrFail($id);
        return view('notation.edit', compact('notation'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
         $notations= Notation::findOrFail($id);
        $notations->update($request->all());
        return redirect()->route('notations.index');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $notations = Notation ::findOrFail($id);
        $notations->delete();
        return redirect()->route('notations.index');
    }



    public function calculateInfrastructureAverage($universityId)
    {
        $notations = Notation::where('university_id', $universityId)
            ->whereHas('criteria', function ($query) {
                $query->where('name', 'Infrastructure');
            })
            ->get();

        if ($notations->isEmpty()) {
            return 0; // Ou une autre valeur par défaut si aucune note n'est trouvée.
        }

        $total = $notations->sum('score');
        $count = $notations->count();
        $average = $total / $count;

        return $average;
    }


  
    public function infrastructureRanking()
    {
        $notations= DB::table('universities')
            ->join('notations', 'universities.id', '=', 'ratings.university_id')
            ->join('criteria', 'notations.criteria_id', '=', 'criteria.id')
            ->where('criteria.name', 'Infrastructure')
            ->select('universities.*', DB::raw('AVG(ratings.score) as average'))
            ->groupBy('universities.id')
            ->orderByDesc('average')
            ->get();

        return view('university.notations', compact('notations'));
    }
}



