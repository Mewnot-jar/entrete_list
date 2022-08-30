<?php

namespace App\Http\Controllers;

use App\Models\Entretenimiento;
use App\Models\Formato;
use Illuminate\Http\Request;

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
        $entretenimiento = new Entretenimiento();
        $formatos = Formato::pluck('nombre', 'id');
        return view('entretenimiento.create', compact('entretenimiento', 'formatos'));
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

        Entretenimiento::insert($datosEntretenimiento);
        return redirect('entretenimiento')->with('mensaje', 'Empleado agregado');
        //return response()->json($datosEntretenimiento);
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
    public function edit($id)
    {
        //


        $entretenimiento = Entretenimiento::findOrFail($id);
        $formatos = Formato::pluck('nombre', 'id');
        return view('entretenimiento.edit', compact('entretenimiento', 'formatos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Entretenimiento  $entretenimiento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosEntretenimiento = request()->except(['_token', '_method']);
        $entretenimiento = Entretenimiento::findOrFail($id);
        Entretenimiento::where('id', '=', $id)->update($datosEntretenimiento);
        return redirect('entretenimiento')->with('mensaje', 'Empleado modificado');
        //return response()->json($datosEntretenimiento);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Entretenimiento  $entretenimiento
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $entretenimiento = Entretenimiento::findOrFail($id);
        Entretenimiento::destroy($id);
        return redirect('entretenimiento')->with('mensaje', 'Empleado borrado');
    }
}
