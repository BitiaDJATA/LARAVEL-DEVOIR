<?php

namespace App\Http\Controllers;

use App\Models\University;
use Illuminate\Http\Request;

class UniversityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $universities = University::all();
        return view('admin', compact('universities'));
    }

    public function index_three()
    {
        $universities = University::paginate(6);
        return view('list', compact('universities'));
    }


    public function index_two(){
        $fourthUniversities= University::take(4)->get();
        return view('index', compact('fourthUniversities'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('universities.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $university = new University();
       $university->nomUniv = $request->nomUniv;
       $university->description = $request->description;
       $university->localisation= $request->localisation;
       if($request->file('image')->isValid()){
           $photo=$request->image;
           $fileName=$photo->getClientOriginalName();
           $filePath=$photo->storeAs("images",$fileName,"public");
           $university->image=$filePath;
           $university->save();
       }
    
        return redirect()->back();
    }

    
    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $universitys = University::findorFail($id);
        return view('detaillist', compact('universitys'));
    }
    public function show_univers($id)
    {
        $universitys = University::findorFail($id);
        $universities_M=University::all();
        return view('detaillist', compact('universitys', 'universities_M'));
    }

    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $university = University::findOrFail($id);
        return view('admin', compact('university'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $universities = University::findOrFail($id);
        $universities->update($request->all());
        return redirect()->route('universities.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $universities = University ::findOrFail($id);
        $universities->delete();
        return redirect()->back();
    }
}
