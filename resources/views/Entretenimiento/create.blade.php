@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card p-4 text-white bg-secondary">
        <form action="{{url('/entretenimiento')}}" method="post" class="formulario">
            @csrf
            @include('entretenimiento.form', ['modo'=>'Crear'])
        </form>
    </div>
</div>
@endsection
@section('js')
    <script>
        $('.formulario').submit(function(e) {
            e.preventDefault();
            Swal.fire({
                title: 'Desesas agregarlo?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, quiero agregarlo!',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    this.submit();
                }
            })
        });
    </script>
@endsection
