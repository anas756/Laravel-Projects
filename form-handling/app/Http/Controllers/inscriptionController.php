<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class inscriptionController extends Controller
{
    function create() {
        return view('form');
    }

    function store(Request $request){
        $request -> validate([
            'userMatricule' => 'required',
            'userName' => 'required',
            'userEmail' => 'required|email',
            'userDate' => 'required|date',
            'formation' => 'required',
            'modules' => 'required',
        ],[
            'userMatricule.required' => 'le matricule est obligatoire',
            'userEmail.email' => 'E-mail invalide',
            'modules.required' => 'Il faut selectionnez au moins une seule choix',
        ]);
        return view('recap', ['valeurs' => $request]);
    }

}
