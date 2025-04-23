@extends('partials.layout')

@section('title','Contact')

@section('content')
    <div class="row">
        <div class="col-12 col-sm-10 col-ls-6 mx-auto">
            <form class="bg-white shadow rounded py-3 px-4" action="{{ route('contact.submit') }}" method="POST">
                <h1 class="display-4">@lang('Contact')</h1>
                @csrf
        
                <div class="form-group mb-3">
                    <label for="name">Nombre</label>
                    <input class="form-control bg-light shadow-sm @error('name') is-invalid @enderror"
                            id="name"
                            type="text"
                            name="name"
                            placeholder="Nombre: "
                            value="{{ old('name') }}">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
        
                <div class="form-group mb-3">
                    <label for="subject">Asunto</label>
                    <input class="form-control bg-light shadow-sm @error('subject') is-invalid @enderror"
                            id="subject"
                            type="text"
                            name="subject"
                            placeholder="Asunto: "
                            value="{{ old('subject') }}">
                    @error('subject')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
        
                <div class="form-group mb-3">
                    <label for="email">Email</label>
                    <input class="form-control bg-light shadow-sm @error('email') is-invalid @enderror"
                            id="email"
                            type="text"
                            name="email"
                            placeholder="Email: "
                            value="{{ old('email') }}">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
        
                <div class="form-group mb-3">
                    <label for="content">Mensaje</label>
                    <textarea class="form-control bg-light shadow-sm @error('content') is-invalid @enderror"
                                id="content"
                                name="content" 
                                placeholder="Mensaje: ">{{ old('content') }}</textarea>
                    @error('content')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="d-grid">
                    <button class="btn btn-primary btn-lg text-light">Enviar</button>
                </div>
            </form>
        </div>
    </div>
@endsection