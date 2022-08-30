@extends('layouts.app')

@section('content')
<div class="container">
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <p>Aqui podras crear nuevos formatos! Prueba agregando uno nuevo!</p>
    </div>
    @if (Session::has('mensaje'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ Session::get('mensaje') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <a href="{{ url('/formatos/create') }}" class="btn btn-success mb-2">
        Nuevo <i class="fa-solid fa-circle-plus"></i>
    </a>
    <table class="table table-hover table-bordered text-center">
        <thead class="thead-dark">
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Opciones</th>
            </tr>
        </thead>
        <tbody class="bg-white">
            @foreach ($formatos as $formato)
                <tr>
                    <th scope="row" class="align-middle">{{ $formato->id }}</th>
                    <td class="align-middle">{{ $formato->nombre }}</td>
                    <td>
                        <div class="d-flex justify-content-around">
                            <a href="{{ url('/formatos/' . $formato->id . '/edit') }}"
                                class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i>
                            </a>
                            <form action="{{ url('/formatos/' . $formato->id) }}" method="post" class="d-inline">
                                @csrf
                                {{ method_field('DELETE') }}
                                <button onclick="return confirm('Quieres borrar?')" value="Eliminar" class="btn btn-danger">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
