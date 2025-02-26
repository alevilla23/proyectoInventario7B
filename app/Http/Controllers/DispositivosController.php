<?php

namespace App\Http\Controllers;

use App\Models\Dispositivos;
use Illuminate\Http\Request;

class DispositivosController extends Controller
{
    public function index()
    {
        $utensilios = Dispositivos::all();
        return view('utensilios.index', compact('utensilios'));
    }

    public function create()
    {
        return view('utensilios.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'tipo' => 'required',
            'completo' => 'required|boolean',
            'funciona' => 'required|boolean',
        ]);

        Dispositivos::create($request->all());

        return redirect()->route('utensilios.index');
    }

    public function show(Dispositivos $utensilio)
    {
        return view('utensilios.show', compact('utensilio'));
    }

    public function edit(Dispositivos $utensilio)
    {
        return view('utensilios.edit', compact('utensilio'));
    }

    public function update(Request $request, Dispositivos $utensilio)
    {
        $request->validate([
            'nombre' => 'required',
            'tipo' => 'required',
            'completo' => 'required|boolean',
            'funciona' => 'required|boolean',
        ]);

        $utensilio->update($request->all());

        return redirect()->route('utensilios.index');
    }

    public function destroy(Dispositivos $utensilio)
    {
        $utensilio->delete();
        return redirect()->route('utensilios.index');
    }
}
