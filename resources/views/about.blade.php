@extends('partials.layout')

@section('title','About')

@section('content')
<div class="container p-5">
    <div class="row">
        <div class="col-12 col-lg-6">
            <img class="img-fluid" src="{{ asset('images/About.svg') }}" alt="Sobre mi">
        </div>
        <div class="col-12 col-lg-6">
            <h1 class="display-4 text-primary">Conoceme</h1>
            <p class="lead text-secondary">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae ipsum iste nesciunt reprehenderit pariatur at cum eius hic eligendi commodi ullam tenetur, aliquid laborum vitae perferendis nisi, nostrum inventore enim?
            </p>
            <div class="d-grid">
                <a class="btn btn-lg btn-block text-light btn-primary mb-2" href="{{ route('contact') }}">
                    Contactame
                </a>
                <a class="btn btn-lg btn-block btn-outline-primary" href="{{ route('project.index') }}">
                    Portafolio
                </a>
            </div>
        </div>
    </div>
</div>
@endsection