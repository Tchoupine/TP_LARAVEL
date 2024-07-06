<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Freelancer;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    // Afficher la liste des freelancers
    public function index()
    {
       
        $freelancers = Freelancer::all();
        dd($freelancers);
        return view('freelancer.table.index', compact('freelancers'));

    }
    // Afficher le formulaire de création
    public function create()
    {
        return view('freelancers.create');
    }

    // Enregistrer un nouveau freelancer
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'phone_number' => 'required',
            'email_address' => 'required|email',
            'address' => 'required',
            'country' => 'required',
            'city' => 'required',
        ]);

        Freelancer::create($request->all());

        return redirect()->route('freelancer.index')
                         ->with('success', 'Freelancer created successfully.');
    }

    // Afficher les détails d'un freelancer
    public function show(Freelancer $freelancer)
    {
        return view('freelancer.show', compact('freelancer'));
    }

    // Afficher le formulaire d'édition
    public function edit(Freelancer $freelancer)
    {
        return view('freelancer.crud.edit', compact('freelancer'));
    }

    // Mettre à jour un freelancer existant
    public function update(Request $request, Freelancer $freelancer)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'phone_number' => 'required',
            'email_address' => 'required|email',
            'address' => 'required',
            'country' => 'required',
            'city' => 'required',
        ]);

        $freelancer->update($request->all());

        return redirect()->route('freelancer.index')
                         ->with('success', 'Freelancer updated successfully.');
    }

    // Supprimer un freelancer existant
    public function destroy(Freelancer $freelancer)
    {
        $freelancer->delete();

        return redirect()->route('freelancer.index')
                         ->with('success', 'Freelancer deleted successfully.');
    }
}
