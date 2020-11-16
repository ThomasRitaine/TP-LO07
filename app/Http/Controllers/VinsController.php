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


    public function create() {
        return view('vins.create');
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
        return redirect('vins/'. $vin->id);
    }


    public function show(Vin $vin)
    {
        return view('vins.show', compact('vin'));
    }


    public function edit(Vin $vin)
    {
        return view('vins.edit', compact('vin'));
    }


    public function update(Vin $vin)
    {
        $vin->update($this->validator());

        return redirect('vins/'. $vin->id);
    }

    public function destroy(Vin $vin)
    {
        $vin->delete();
        return redirect('vins');
    }
}
