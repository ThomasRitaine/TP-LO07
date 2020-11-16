<?php

namespace App\Http\Controllers;

use App\Vin;
use Illuminate\Http\Request;

class VinsController extends Controller
{

    public function index() {
        $listeVins = Vin::all();
        return view('vins.index', compact('listeVins'));
     }


     private function validator() {
        return request()->validate([
            'cru' => 'required|min:1',
            'annee' => 'required|integer',
            'degre' => 'required|numeric|min:0|max:100'
        ]);
    }
    

    public function store() {
        $vin = Vin::create($this->validator());
        return back();
    }
    
     
}
