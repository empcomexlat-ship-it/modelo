@extends('layouts.app')

@section('titulo', $pagina->titulo)

@section('contenido')
    <h1 class="text-3xl font-bold mb-4">{{ $pagina->titulo }}</h1>
    <div class="prose max-w-none">
        {!! $pagina->contenido !!}
    </div>
@endsection
