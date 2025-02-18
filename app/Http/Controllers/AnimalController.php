<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pet;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function Pet(Request $request)
    {

       $Pet = Pet::all();
       return view ('Pet.index', ['ListaAni' => $Pet]);

    }


    public function create()
    {
        return view ('Pet.create');
    }


    public function store(Request $request)
    {
       $Pet = new Pet();
       $Pet -> nome = $request->nome;
       $Pet -> descricao = $request->descricao;
       $Pet ->save();

       return redirect('/Pet');
    }

    public function show(string $id)
    {
        //
    }


    public function edit(string $id)
    {
        // $Pet = Pet::find($id);
        // return view ('Pet.edit',['Pet' => $Pet]);

        $Pet = Pet::findOrFail($id);
        return view('Pet.edit', compact('Pet'));

    }


    public function update(Request $request)
    {
        
       $Pet = Pet::find($request->id);
       $Pet -> nome = $request->nome;
       $Pet -> descricao = $request->descricao;
       $Pet ->save();

       return redirect('/Pet');
    }


    public function destroy(Request $request)
    {
        Pet::destroy($request->id);
        return redirect('/Pet');
    }
}
