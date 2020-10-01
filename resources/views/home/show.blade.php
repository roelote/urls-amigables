@extends('layouts.app3')



@section('title_seo', $slung->nombre )




@section('contenido')
{{-- {{$slung}} --}}
<div class="container">
    <h1 class="text-uppercase text-center"> {{$slung->nombre}}  </h1>
    <p>{{$slung->contenido}} </p>
    <img src="{{$slung->image_url}}" alt="{{$slung->nombre}}">

</div>
@endsection