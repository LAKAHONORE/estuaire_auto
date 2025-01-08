<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formation;

class FormationConroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $formations = Formation::all();

        return view("formation.index", compact("formations"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("formation.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{

            $validateData = $request->validate([
                "name"=> "required",
                "description"=> "required",
            ]);

            $formation = Formation::create($validateData);

            return redirect()->route("formation.index")->with("success","Opération effectuée avec succès !");

        }catch(\Exception $e){
            return redirect()->back()->with("error", "Une erreur est survenue !");
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $formation = Formation::findOrFail($id);

        return view("formation.update", compact("formation"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try{

            $validateData = $request->validate([
                "name"=> "required",
                "description"=> "required",
            ]);

            $formation = Formation::findOrFail($id)->update($validateData);

            return redirect()->route("formation.index")->with("success","Opération effectuée avec succès !");

        }catch(\Exception $e){
            return redirect()->back()->with("error", "Une erreur est survenue !");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try{
            $formation = Formation::findOrFail($id)->delete();

            return redirect()->route("formation.index")->with("success","Opération effectuée avec succès !");
        }catch(\Exception $e){
            return redirect()->back()->with("error", "Une erreur est survenue !");
        }
    }
}
