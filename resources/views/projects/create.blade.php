@extends('partials.layout')

@section('title','Portfolio')

@section('content')
    <h1>Nuevo Proyecto</h1>
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form method="POST" action="{{ route('project.store') }}">
        @csrf {{-- Cross Site Request Forgery --}}
        <label for="">Nombre: </label> <br>
        <input name="name" type="text" placeholder="Nombre del proyecto" value="{{ old('name') }}"> <br>
        <label for="">Url: </label> <br>
        <input name="url" type="text" placeholder="url del proyecto" value="{{ old('url') }}"> <br>
        <label for="">Descripción: </label> <br>
        <textarea name="description" placeholder="Descripción del proyecto">{{ old('description') }}</textarea><br>
        <button>Guardar</button>
    </form>

@endsection