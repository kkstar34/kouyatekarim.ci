<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Test;

class TestController extends Controller
{
    public function afficher(){
        return view ('test');
    
    }
    public function envoyer(Request $request){
       

        Test::create(
            [
                'titre' => $request->titre,
                'contenu'=> $request->contenu,
                'category_id' => $request->category_id
            ]
            );

            return back();


    }
}
