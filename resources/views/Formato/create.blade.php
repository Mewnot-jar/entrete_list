@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card p-4 text-white bg-secondary">
        <form action="{{url('/formatos')}}" method="post">
            @csrf
            @include('formato.form', ['modo'=>'Crear'])
        </form>
    </div>
</div>
@endsection
