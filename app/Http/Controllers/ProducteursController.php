<?php

namespace App\Http\Controllers;

use App\Producteur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProducteursController extends Controller
{
    public function selection() {
        $listeProducteurs = Producteur::all();

        return view('producteurs.select', compact('listeProducteurs'));
    }

    public function afficherVins(Request $request) {
        $producteur_id = $request->input('producteur_id');

        $producteur = Producteur::findOrFail($producteur_id);
        $listeVins = $producteur->vins;

        return view('vins.index', compact('listeVins'));
    }
}
