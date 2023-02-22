<?php

namespace App\Http\Controllers;

use App\Models\Conducteur;
use App\Models\Souscripteur;


class SalesController extends Controller
{
    public function show(){
     $data=Souscripteur::all(); 
      
     return view('layout/ren', compact('data')); 
    }
}
