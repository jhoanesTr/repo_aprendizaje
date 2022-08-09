@extends('layout.app')

@section('title', ' | Panel Admin')

@section('content')

    <!-- Content Header (Page header) -->

    <div class="container mt-5">

        <div class="table-responsive w-50">
            <table class="table table-striped table-hover">
                <thead>
                    <tr class="table-primary">
                        <th class="col">Nome</th>
                        <th class="col">Correo</th>
                        <th class="col">Admin</th>
                        <th class="col">Accións</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->is_admin }}</td>
                        <td>Editar | Eliminar</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="mt-4">
            <a href="{{ url('/admin/index') }}" class="btn btn-primary">VOLVER</a>
        </div>

    </div>

    <div class="pagination">
        {{ $users->links() }}
    </div>

    <!-- Content Footer (Page footer) -->

@stop
