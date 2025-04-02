@extends('partials.layout')

@section('title','Portfolio')

@section('content')
    <h1>Actualizar Proyecto | {{ $project['name'] }}</h1>
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form method="POST" action="{{ route('project.update', $project) }}">
        @csrf {{-- Cross Site Request Forgery --}}
        @method('PATCH') {{-- Metodo de envío del formulario --}}
        <label for="">Nombre: </label> <br>
        <input name="name" type="text" placeholder="Nombre del proyecto" value="{{ old('name', $project['name']) }}"> <br>
        <label for="">Url: </label> <br>
        <input name="url" type="text" placeholder="url del proyecto" value="{{ old('url', $project['url']) }}"> <br>
        <label for="">Descripción: </label> <br>
        <textarea name="description" placeholder="Descripción del proyecto">{{ old('description', $project['description']) }}</textarea><br>
        <button>Actualizar</button>
    </form>

@endsection