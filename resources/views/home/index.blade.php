@extends('layouts.app3')

@section('title_seo', 'Este es el titulo de la pagina')

@section('contenido')
<div class="container">
        <h1>lista de libros</h1>
  
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Titulo</th>
                <th scope="col">Contenido</th>
                <th scope="col">Ver </th>
              </tr>
            </thead>
            <tbody>
                @foreach($libro as $li)
                    <tr>
                        <th scope="row">{{$li->id}}</th>
                        <td>{{$li->nombre}}</td>
                        <td>{{$li->contenido}}</td>
                        <td> 
                            <a href="{{route('inicio.show.inicio',$li->slug)}}" class="btn btn-success">Ver</a>
                        </td>
                    </tr>
              @endforeach
             
            </tbody>
          </table>
</div>


@endsection