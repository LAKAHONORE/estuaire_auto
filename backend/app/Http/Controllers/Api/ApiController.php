<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Permi;
use App\Models\Config;
use App\Models\Formation;

class ApiController extends Controller
{
    public function store(Request $request)
    {
        try{
            $validateData = $request->validate([
                "name" => "required",
                "tel" => "required",
                "email"=> "required",
                "message"=> "required"
            ]);

            $contact = Contact::create([
                "name" => $validateData["name"],
                "tel"=> $validateData["tel"],
                "email"=> $validateData["email"],
                "message"=> $validateData["message"],
                "boutique_link" => $request->boutique_link,
            ]);

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


    public function listAll(){
        $permis = Permi::orderBy("name", "asc")->get();
        $formations = Formation::orderBy("name", "asc")->get();
        $config = Config::first();

        return response()->json([
            "status" => "200",
            "permis" => $permis,
            "formations" => $formations,
            "config" => $config
        ]);
    }
}
