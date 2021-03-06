<?php

namespace App\Http\Controllers;

use App\Models\Comentario;

use Illuminate\Http\Request;

class ComentarioController extends Controller
{
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comentarios = Comentario::all();
        return view('comentario.comentarioIndex', compact('comentarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comentario.comentarioCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'texto' => 'required|min:3|max:30',
            'fecha_publicacion' => 'required|date',
            'peliculaId' => 'required|numeric',
            'usuarioID' => 'required|numeric'
        ]);

        Comentario::create($request->all());
        return redirect()->route('comentario.index')->with('success', 'Comentario agregado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comentario  $comentario
     * @return \Illuminate\Http\Response
     */
    public function show(Comentario $comentario)
    {
        return view('comentario.comentarioShow', compact('comentario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comentario  $comentario
     * @return \Illuminate\Http\Response
     */
    public function edit(Comentario $comentario)
    {
        return view('comentario.comentarioEdit', compact('comentario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comentario  $comentario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comentario $comentario)
    {
        Comentario::where('id', $comentario->id)->update($request->except('_token', '_method'));

        
        return redirect()->route('comentario.index')->with('sucess', 'Comentario actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comentario  $comentario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comentario $comentario)
    {
        $comentario->delete();
        
        return back()->with('succes', 'Comentario eliminado correctamente');
    }
}
