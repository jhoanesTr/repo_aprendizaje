@extends('layout.app')

@section('title', ' | Panel Admin')

@section('content')

    <!-- Content Header (Page header) -->
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class=" col-md-7">
                <div class="card ">
                    <div class="h5 card-header bg-secondary text-light">{{ __('Rexistro') }}</div>

                    <div class="card-body ">
                        <form method="POST" action="{{ route('admin.store') }}" autocomplete="off">
                            @csrf

                            <div class="row mb-3">
                                <label for="name"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Nome') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Contrasinal') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Repita contrasinal') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            {{-- INPUT EXTRA - ROL DE ADMIN --}}
                            <div class="row mb-3">
                                <label for="is_admin"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Permisos de Admin') }}</label>

                                <div class="col-md-6">
                                    <input id="is_admin" type="boolean" value="0"
                                        class="form-control @error('is_admin') is-invalid @enderror" name="is_admin"
                                        required autocomplete="is_admin">

                                    @error('is_admin')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4 mt-1">
                                    <button type="submit" class="btn btn-outline-primary">
                                        {{ __('Enviar e Gardar') }}
                                    </button>
                                    <a href="{{ url('/admin/index') }}" class="btn btn-outline-secondary">Cancelar</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Footer (Page footer) -->

@stop
