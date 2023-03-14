<?php

namespace App\Http\Controllers;

use App\Models\Empanadas;
use Illuminate\Http\Request;

class EmpanadasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datos = Empanadas::all();
        return view('welcome' , compact( 'datos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('agregar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $empanadas = new Empanadas();
        $empanadas->nombre = $request->post('nombre');
        $empanadas -> sabor = $request->post('sabor');

         $empanadas->save();

         return redirect()->route("empanada.index") ->with("success" , "Agregado con exito!");
    }

    /**
     * Display the specified resource.
     */
    public function show(Empanadas $empanadas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $empanadas = Empanadas::find($id);
         return view('actualizar' , compact('empanadas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $empanadas = Empanadas::find($id);
        $empanadas->nombre = $request->post('nombre');
        $empanadas -> sabor = $request->post('sabor');

         $empanadas->save();

         return redirect()->route("empanada.index") ->with("success" , "Editado con exito!");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Empanadas $empanadas)
    {
        //
    }
}
