@extends('layouts.app2')

@section('section_libro')

    <h1 class="text-center text-uppercase text-primary">Editar Libro</h1>
   
<div class="container">
    
    <form method="post" action="/libros/{{$libro -> id}}" enctype="multipart/form-data">
        <div class="form-group">
            @csrf
            @method('PATCH')
            <label for="nombre">Name:</label>
            <input type="text" class="form-control" name="nombre" value="{{$libro -> nombre}}"/>
        </div>
        <div class="form-group">
            <label for="slug">Url :</label>
            <input type="text" class="form-control" name="slug" value="{{$libro -> slug}}"/>
        </div>
        <div class="form-group">
            <label for="contenido">contenido :</label>
            <input type="text" class="form-control" name="contenido" value="{{$libro -> contenido}}"/>
        </div>
        <div class="form-group">
            <img src="{{$libro->image_url}} " alt="" width="100" class="d-block">
            <label for="image_url">Imagen:</label>
            <input type="file" class="form-control-file" name="image_url" id="image_url">
          </div>

       
        <button type="submit" class="btn btn-primary">Update Data</button>
    </form>

</div>
    
           
@endsection