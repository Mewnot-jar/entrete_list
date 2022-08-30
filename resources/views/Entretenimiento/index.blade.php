<a href="{{ url('/entretenimiento/create') }}">Registrar nuevo entretenimiento</a>
<table class="table table-hover">
    <thead class="thead-dark">
        <tr>
            <th>#</th>
            <th>Formato</th>
            <th>Descripcion</th>
            <th>Estado</th>
            <th>Opciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ( $entretenimientos as $entretenimiento)
        <tr>
            <td>{{$entretenimiento->id}}</td>
            <td>{{$entretenimiento->formatos->nombre}}</td>
            <td>{{$entretenimiento->descripcion}}</td>
            <td>{{$entretenimiento->estado}}</td>
            <td>
                <div class="d-flex justify-content-around">
                    <a href="{{ url('/entretenimiento/' . $entretenimiento->id . '/edit') }}" class="btn btn-primary">Editar</a>
                    <form action="{{ url('/entretenimiento/' . $entretenimiento->id) }}" method="post" class="d-inline">
                        @csrf
                        {{ method_field('DELETE') }}
                        <input type="submit" onclick="return confirm('Quieres borrar?')" value="Eliminar"
                            class="btn btn-danger">
                    </form>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
