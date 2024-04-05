<?php

namespace App\Http\Controllers;

use App\Models\Stagiaire;
use Illuminate\Http\Request;

class StagiaireController extends Controller
{
    public function index() {

        $stagiaires = Stagiaire::all();
        return view("stagiaire", compact("stagiaires"));
    }

    public function create() {

        return view("create");
    }


    public function store(Request $request) {


        $validateData = $request->validate([
          "fullName"=>"required",
        ]);

    //   Stagiaire::create($request->all())

        Stagiaire::create($validateData);


        return redirect()->route('stagiaire')->with("success", "Stagiaire ajouter avec succés!");
    }
    
}
