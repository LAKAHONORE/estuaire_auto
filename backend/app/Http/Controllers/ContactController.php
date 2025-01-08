<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = Contact::all();
        return view("contacts.index", compact("contacts"));
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
        try{
            $validateData = $request->validate([
                "name" => "required",
                "tel" => "required",
                "email"=> "required",
                "message"=> "required"
            ]);

            $contact = Contact::create($validateData);

            return response()->json([
                "status" => "200",
                "message"=> "Enregistrement effectué avec succès !"
            ]);

        }catch(\Exception $e){
            return response()->json([
                "status" => "400",
                "message"=> $e->getMessage()
            ]);
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $contact = Contact::findOrFail($id)->delete();
            return redirect()->route("contact.index")->with("success","Opération effectuée avec succès !");

        }catch (\Exception $e) {
            return back()->with("error", "Une erreur est survenue !");
        }
    }
}
