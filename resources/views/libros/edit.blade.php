@extends('layouts.app2')

@section('section_libro')

    <h1 class="text-center text-uppercase text-primary">Editar Libro</h1>
   


    
<div class="container">
    
    <form method="post" action="/libros/{{$libro -> id}}">
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
       
        <button type="submit" class="btn btn-primary">Update Data</button>
    </form>

</div>
    
           
@endsection