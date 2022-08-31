@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card p-4 text-white bg-secondary">
        <form action="{{url('/entretenimiento/'.$entretenimiento->id)}}" method="post" class="formulario">
            @csrf
            {{method_field('PATCH')}}
            @include('entretenimiento.form', ['modo'=>'Editar'])
        </form>
    </div>
</div>
@endsection
@section('js')
    <script>
        $('.formulario').submit(function(e) {
            e.preventDefault();
            Swal.fire({
                title: '¿Desesas guardar los cambios?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: '¡Si, quiero guardar!',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    this.submit();
                }
            })
        });
    </script>
@endsection
