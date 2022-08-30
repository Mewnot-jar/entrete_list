

<div class="container">
<form action="{{url('/entretenimiento')}}" method="post">
@csrf
    @include('entretenimiento.form')
</form>
</div>

