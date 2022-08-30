@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card p-4">
        <form action="{{url('/entretenimiento')}}" method="post">
            @csrf
            @include('entretenimiento.form', ['modo'=>'Crear'])
        </form>
    </div>
</div>
@endsection
