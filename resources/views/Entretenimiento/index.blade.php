@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="{{ url('/entretenimiento/create') }}" class="btn btn-success mb-2">
            Nuevo <i class="fa-solid fa-circle-plus"></i>
        </a>
        <table class="table table-hover table-bordered text-center">
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>Formato</th>
                    <th>Descripcion</th>
                    <th>Estado</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody class="bg-white">
                @foreach ($entretenimientos as $entretenimiento)
                    <tr>
                        <th scope="row" class="align-middle">{{ $entretenimiento->id }}</th>
                        <td class="align-middle">{{ $entretenimiento->formatos->nombre }}</td>
                        <td class="align-middle">{{ $entretenimiento->descripcion }}</td>
                        <td class="align-middle">{{ $entretenimiento->estado }}</td>
                        <td>
                            <div class="d-flex justify-content-around">
                                <a href="{{ url('/entretenimiento/' . $entretenimiento->id . '/edit') }}"
                                    class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i>
                                </a>

                                <form action="{{ url('/entretenimiento/' . $entretenimiento->id) }}" method="post" class="d-inline">
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
