@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card p-4 text-white bg-secondary">
        <form action="{{url('/formatos/'.$formatos->id)}}" method="post">
            @csrf
            {{method_field('PATCH')}}
            @include('formato.form', ['modo'=>'Editar'])
        </form>
    </div>
</div>
@endsection