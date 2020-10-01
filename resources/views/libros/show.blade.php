@extends('layouts.app2')

@section('section_libro')

   <div class="container">
    <h1 class="text-center text-uppercase mt-5">Libros {{$slung->nombre}} </h1>
    <p> {{$slung->contenido}} </p>
    <img src="{{$slung->image_url}}" alt="">
   </div>


@endsection
   