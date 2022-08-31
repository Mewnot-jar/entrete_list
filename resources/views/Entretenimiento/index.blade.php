@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <p>Aqui podras crear una lista de todas tus entretenciones pendientes, en progreso y terminadas! Es importante
                ser organizado! Prueba agregando una nueva!</p>
        </div>
        @if (Session::has('mensaje'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ Session::get('mensaje') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
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

                                <form action="{{ url('/entretenimiento/' . $entretenimiento->id) }}" method="post"
                                    class="d-inline formulario-eliminar">
                                    @csrf
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn btn-danger">
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
@section('js')
    @if (session('mensaje') == 'Entretenimiento borrado')
        <script>
            Swal.fire(
                '¡Borrado!',
                'Tu entretenimiento fue eliminado de los registros.',
                'success'
            )
        </script>
    @endif
    @if (session('mensaje') == 'Entretenimiento agregado')
        <script>
            Swal.fire({
                icon: 'success',
                title: '¡El entretenimiento fue agregado!',
                showConfirmButton: true,
                confirmButtonText: '¡Gracias!'
            })
        </script>
    @endif
    @if (session('mensaje') == 'Entretenimiento modificado')
        <script>
            Swal.fire({
                icon: 'success',
                title: '¡El entretenimiento fue modificado!',
                showConfirmButton: true,
                confirmButtonText: '¡Gracias!'
            })
        </script>
    @endif
    <script>
        $('.formulario-eliminar').submit(function(e) {
            e.preventDefault();
            Swal.fire({
                title: '¿Estas seguro?',
                text: "¡No puedes revertir esta accion!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: '¡Si, quiero borrarlo!',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    this.submit();
                }
            })
        });
    </script>
@endsection
