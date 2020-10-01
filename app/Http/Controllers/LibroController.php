<?php

namespace App\Http\Controllers;

use App\Libro;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class LibroController extends Controller
{


    // public function __construct()
    //     {
    //         $this->middleware('auth');
    //     }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $libro = Libro::get();
         return view('libros.index',compact('libro'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('libros.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // validacion de informacion
        $datos = $request->validate([
            'nombre' => 'required',
            'contenido' =>'required'
        ]);

         $slug = Str::slug($datos['nombre'], '-');

        
        //seccion de insertar en la bd
        //recuperamos cada campo, tambien se puede recuperar todo con all

        // $nombres = request()->nombre;
        // $contenidos = $request->contenido;

        // $clase = new Libro();

         Libro::create([
              'slug' => $slug,
              'nombre' => $datos['nombre'],
              'contenido' => $datos['contenido'],
          ]);

        return redirect()->route('libros.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
            $slung = Libro::where('slug','=', $slug)->firstOrFail();

            return view('libros.show',compact('slung'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function edit(Libro $libro)
    {
        return view('libros.edit',compact('libro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Libro $libro)
    {
         // validacion de informacion

         $datos = $request->validate([
             'slug' => 'required',
            'nombre' => 'required',
            'contenido' =>'required'
        ]);

            
            // $urls = Str::slug($datos['nombre'], '-');
             
         // asignacion de valores cuando actualizas noma y esta creado la clase, como ven se pasa por parametro
            $libro->slug = $datos['slug'];
            $libro->nombre = $datos['nombre'];
            $libro->contenido = $datos['contenido'];
            $libro->save();

        return redirect()->route('libros.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Libro $libro)
    {

        $libro->delete();
        return redirect()->route('libros.index');
    }
}
