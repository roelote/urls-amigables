@extends('layouts.app2')

@section('section_libro')

    <h1 class="text-center text-uppercase text-primary">Crear Libro</h1>
    {{-- {{$libro}} --}}

    <div class="container">

        <form method="POST" action=" {{ route('libros.store')}} " enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="nombre">Nombre</label>
              <input type="text" class="form-control mb-2" id="nombre" name="nombre" placeholder="nombre">
            </div>

            <div class="form-group">
                <label for="contenido">Contenido</label>
                <input type="text" class="form-control mb-2" id="contenido" name="contenido" placeholder="contenido">
            </div>

            <div class="form-group">
              <label for="image_url">Imagen</label>
              <input type="file" class="form-control-file" name="image_url" id="image_url">
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
           
@endsection