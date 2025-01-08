<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Config;

class ConfigController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        $config = Config::findOrFail($id);
        return view("config.update", compact("config"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        try{

            $validateData = $request->validate([
                "description" =>"required",
                "tel_1"=> "required",
                "tel_2"=> "required",
                "email"=> "required",
            ]);


            Config::findOrFail($id)->update([
                "description"=> $validateData["description"],
                "tel_1"=> $validateData["tel_1"],
                "tel_2"=> $validateData["tel_2"],
                "email"=> $validateData["email"],
                "boutique_link"=> $request->input("boutique_link"),  // nullable field for boutique_link in the database table. If no value is provided, it will be null in the database.
            ]);

            return redirect()->back()->with("success","Opération effectuée avec succès !");

        }catch(\Exception $e){
            return redirect()->back()->with("error", "Une erreur est survenue !");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
