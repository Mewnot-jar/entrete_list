<a href="{{ url('/entretenimiento/create') }}">Registrar nuevo entretenimiento</a>
<table class="table table-hover">
    <thead class="thead-dark">
        <tr>
            <th>#</th>
            <th>Formato</th>
            <th>Descripcion</th>
            <th>Estado</th>
        </tr>
    </thead>
    <tbody>
        @foreach ( $entretenimientos as $entretenimiento)
        <tr>
            <td>{{$entretenimiento->id}}</td>
            <td>{{$entretenimiento->formatos->nombre}}</td>
            <td>{{$entretenimiento->descripcion}}</td>
            <td>{{$entretenimiento->estado}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
