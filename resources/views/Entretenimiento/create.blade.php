<form method="POST" action="{{ url('/entretenimiento') }}">
    @csrf

    @include('entretenimiento.form')

</form>
