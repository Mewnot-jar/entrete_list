

<div class="container">
<form action="{{url('/entretenimiento/'.$entretenimiento->id)}}" method="post">
    @csrf
    {{method_field('PATCH')}}
    @include('entretenimiento.form')
</form>
</div>
