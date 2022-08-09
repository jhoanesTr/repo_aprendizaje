@extends('layout.app')

@section('title', ' | Panel Admin')

@section('content')

    <!-- Content Header (Page header) -->

    <!-- Contido principal -->
    <div class="container mt-auto p-5 ">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dámosche á benvida ao Panel de Administración</div>

                <div class="card-body mt-auto">
                    <p>Todo o que podes facer:</p>
                    <a href="{{ route('admin.show')}}" class="btn btn-primary">Ver usuarios rexistrados no SOL</a>
                    <br><br>
                    <a href="{{ route('admin.create')}}" class="btn btn-primary">Rexistrar novo usuario do SOL</a>
                    {{-- {{ route('auth.register') }} --}}
                    <hr>
                </div>
            </div>
        </div>

    </div>

    <!-- Content Footer (Page footer) -->

@stop
