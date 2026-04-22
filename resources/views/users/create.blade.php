@extends('layouts.default')
@section('page-title', 'Adicionar usuário')
@section('content')
    <form action="{{route('users.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Nome</label>
            <input
                type="text"
                name="name"
                value="{{old('name')}}"
                class="form-control @error('name') is-invalid @enderror"
                >
            @error('name')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input
                type="text"
                name="email"
                value="{{old('email')}}"
                class="form-control @error('email') is-invalid @enderror"
            >
            @error('email')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <div class="mb-3">
                <label class="form-label">Senha</label>
            <input
                type="password"
                name="password"
                value="{{old('senha')}}"
                class="form-control @error('password') is-invalid @enderror"
            >
            @error('password')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
        <a href="{{route('users.index')}}" class="btn btn-secondary">Voltar</a>
        <button type="submit" class="btn btn-primary">Criar</button>
    </form>
@endsection
