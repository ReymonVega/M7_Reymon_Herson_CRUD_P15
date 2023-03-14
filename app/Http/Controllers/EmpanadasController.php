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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit(Empanadas $empanadas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Empanadas $empanadas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Empanadas $empanadas)
    {
        //
    }
}
