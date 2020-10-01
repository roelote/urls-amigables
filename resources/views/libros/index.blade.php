@extends('layouts.app2')

@section('section_libro')

    <h1 class="text-center text-uppercase text-primary">Libros</h1>
   

    <div class="container">
        <h2><a class="btn btn-success" href="/libros/create">Agregar</a> </h2>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre del Libro</th>
                <th scope="col">Contenido del librost</th>
                <td scope="col"> URL</td>
                <th scope="col" colspan="3" class="text-center">Otras opciones</th>
              </tr>
            </thead>
            <tbody>
                @foreach($libro as $lib)
                    <tr>
                        <th scope="row">{{$lib->id}} </th>
                        <td>{{$lib->nombre}}</td>
                        <td>{{$lib->contenido}}</td>
                        <td>{{$lib->slug}} </td>
                        <td><a class="btn btn-success" href=" {{route('libros.edit',$lib->id)}} ">editar </a></td>
                        <td><a class="btn btn-danger" href="{{route('libros.show.inicio',$lib->slug)}}">Ver </a></td>
                        
                        <td>
                            <form method="POST" action="/libros/{{$lib -> id}}">
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="btn btn-primary" value="Eliminar" >
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
    <ul>
          
    </ul>

@endsection
   