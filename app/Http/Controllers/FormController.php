<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;

class FormController extends Controller
{
    public function index(){
        return view('formulaire');
    }

    public function post(Request $request){
        Question::create(
            [
                'titre' => $request->titre,
                'contenu' => $request->contenu,
                'category_id' =>$request->category
            ]
            );


            return back();
        }
       
}
