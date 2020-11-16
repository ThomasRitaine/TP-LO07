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

        $listeVins = DB::select(DB::raw('SELECT vin.id, vin.cru, vin.annee, vin.degre
        FROM producteur, vin, recolte
        WHERE vin.id = recolte.vin_id AND producteur.id = recolte.producteur_id
        AND producteur.id = '. $producteur_id.';'));

        return view('vins.index', compact('listeVins'));
    }
}
