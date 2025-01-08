<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Permi;

class PermiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $permis = Permi::all();

        return view("permis.index", compact("permis"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("permis.create");
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

            $permis = Permi::create($validateData);

            return redirect()->route("permis.index")->with("success","Opération effectuée avec succès !");

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
        $permis = Permi::findOrFail($id);

        return view("permis.update", compact("permis"));
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

            $permis = Permi::findOrFail($id)->update($validateData);

            return redirect()->route("permis.index")->with("success","Opération effectuée avec succès !");

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
            $permis = Permi::findOrFail($id)->delete();

            return redirect()->route("permis.index")->with("success","Opération effectuée avec succès !");
        }catch(\Exception $e){
            return redirect()->back()->with("error", "Une erreur est survenue !");
        }
    }
}
