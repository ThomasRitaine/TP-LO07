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

     
}
