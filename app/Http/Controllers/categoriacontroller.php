<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categoria;

class categoriacontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(categoria::all(), 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $categoria = categoria::create($request->all());
        return response($categoria, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categoria = categoria::find($id);
        if(is_null($categoria)){
            return response()->json(['Mensaje' => 'Registro no encontrado'], 404);
        }
        return response()->json($categoria::find($id), 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $categoria = categoria::find($id);
        if(is_null($categoria)){
            return response()->json(['Mensaje' => 'Registro no encontrado'], 404);
        }
        $categoria->update($request->all());
        return response($categoria, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categoria = categoria::find($id);
        if(is_null($categoria)){
            return response()->json(['Mensaje' => 'Registro no encontrado'], 404);
        }
        $categoria->delete();
        return response()-> json(['Message' => 'Se ha eliminado correctamente', 'value' => true], 200);
    }
}
