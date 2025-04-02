@extends('partials.layout')

@section('title','Portfolio')

@section('content')
    <h1>@lang('Portfolio')</h1>

    @auth
        <a href="{{ route('project.create') }}">Nuevo Proyecto</a>
    @endauth

    <ul>
        @forelse($projects as $project)
            <li>
                <a href="{{ route('project.show', $project) }}">
                    {{ $project->name }}
                    <small>
                        <em>{{ $project->created_at }}</em>
                    </small>
                </a>
            </li>
        @empty
            <li>No hay elementos para mostrar</li>
        @endforelse

        {{ $projects->links('pagination::bootstrap-4') }}
    </ul>

@endsection