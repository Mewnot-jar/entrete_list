<?php

namespace App\Http\Controllers;

use App\Models\Formato;
use Illuminate\Http\Request;

class FormatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $formatos = Formato::all();
        return view('Formato.index', compact('formatos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $formato = new Formato();
        return view('Formato.create', compact('formato'));
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
        $campos= [
            'nombre'=>'required'
        ];
        $mensaje=[
            'required'=>'El campo :attribute es requerido',
        ];
        $this->validate($request, $campos, $mensaje);
        $datosFormato = request()->except('_token');

        Formato::insert($datosFormato);
        return redirect('formatos')->with('mensaje', 'Formato agregado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Formato  $formato
     * @return \Illuminate\Http\Response
     */
    public function show(Formato $formato)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Formato  $formato
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $formatos = Formato::findOrFail($id);
        return view('formato.edit', compact('formatos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Formato  $formato
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $campos= [
            'nombre'=>'required'
        ];
        $mensaje=[
            'required'=>'El campo :attribute es requerido',
        ];
        $this->validate($request, $campos, $mensaje);

        $datosFormato = request()->except(['_token', '_method']);
        $formato = Formato::findOrFail($id);
        Formato::where('id', '=', $id)->update($datosFormato);
        return redirect('formatos')->with('mensaje', 'Formato modificado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Formato  $formato
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $formato = Formato::findOrFail($id);
        Formato::destroy($id);
        return redirect('formatos')->with('mensaje', 'Formato borrado');
    }
}
