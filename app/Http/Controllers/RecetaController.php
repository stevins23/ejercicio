<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRecetaRequest;
use App\Http\Requests\UpdateRecetaRequest;
use App\Models\Receta;

class RecetaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recetas = Receta::all();

        return view('recetas.index', compact('recetas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('recetas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRecetaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRecetaRequest $request)
    {
        $datos=$request->all();


        $datos['f_alta']=date("Y-m-d",strtotime($datos['f_alta']));
        
        Receta::create($datos);

        return redirect("/recetas");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Receta  $receta
     * @return \Illuminate\Http\Response
     */
    public function show(Receta $receta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Receta  $receta
     * @return \Illuminate\Http\Response
     */
    public function edit(Receta $receta)
    {
        return view('recetas.edit', compact('receta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRecetaRequest  $request
     * @param  \App\Models\Receta  $receta
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRecetaRequest $request, Receta $receta)
    {
        $datos=$request->all();

        $datos['f_alta']=date("Y-m-d",strtotime($datos['f_alta']));

        $receta->update($datos);

        return redirect("/recetas");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Receta  $receta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Receta $receta)
    {
        //
    }

    public function listadoPdf(){
        $recetas = Receta::all();
        $pdf = \PDF::loadView("recetas.listado_pdf",compact("recetas"));

        return $pdf->stream('listado.pdf');
    }
}
