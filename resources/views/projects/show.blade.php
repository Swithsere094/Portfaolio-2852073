@extends('partials.layout')

@section('title','Portfolio')

@section('content')
    <h1>@lang('Portfolio') | {{ $project->name }}</h1>

    <h4>{{ $project->description }}</h4>
    <p><small>{{ $project->created_at->diffForHumans() }}</small></p>

    
    @auth
        <a href="{{ route('project.edit', $project) }}">Editar</a>
        <a href="#" onclick="document.getElementById('delete-form').submit()">Eliminar</a>

        <form action="{{ route('project.delete', $project) }}" id="delete-form" class="d-none" method="POST">
            @csrf @method('DELETE')
        </form>
    @endauth

@endsection