@extends('partials.layout')

@section('title','Portfolio')

@section('content')
    <h1>@lang('Portfolio') | {{ $project->name }}</h1>

    <h4>{{ $project->description }}</h4>
    <p><small>{{ $project->created_at->diffForHumans() }}</small></p>

    <a href="{{ route('project.edit', $project) }}">Editar</a>

    <form action="{{ route('project.delete', $project) }}" method="POST">
        @csrf @method('DELETE')
        <button>Eliminar</button>
    </form>

@endsection