@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card p-4">
        <form action="{{url('/entretenimiento/'.$entretenimiento->id)}}" method="post">
            @csrf
            {{method_field('PATCH')}}
            @include('entretenimiento.form', ['modo'=>'Editar'])
        </form>
    </div>
</div>
@endsection
