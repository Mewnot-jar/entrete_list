<?php

namespace App\Http\Controllers;

use App\Models\Entretenimiento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EntretenimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $entretenimientos = Entretenimiento::all();
        return view('Entretenimiento.index', compact('entretenimientos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('entretenimiento.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $datosEntretenimiento = request()->except('_token');
        //return redirect('empleado')->with('mensaje', 'Empleado agregado');
        return response()->json($datosEntretenimiento);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Entretenimiento  $entretenimiento
     * @return \Illuminate\Http\Response
     */
    public function show(Entretenimiento $entretenimiento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Entretenimiento  $entretenimiento
     * @return \Illuminate\Http\Response
     */
    public function edit(Entretenimiento $entretenimiento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Entretenimiento  $entretenimiento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Entretenimiento $entretenimiento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Entretenimiento  $entretenimiento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Entretenimiento $entretenimiento)
    {
        //
    }
}
