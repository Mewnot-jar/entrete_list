@if (count($errors)>0)
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: '¡Algo salio mal!'
        })
    </script>
@endif
<div class="form-group">
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre"
        value="{{ isset($formatos->nombre) ? $formatos->nombre : old('formato') }}"
        class="form-control">
        <small class="form-text text-white">Ingresa un formato. Ejemplo: Videojuego.</small>
</div>
<div class="d-flex justify-content-between">
    <a class="btn btn-danger" href="{{url('/formatos/')}}">
        <i class="fa-solid fa-circle-left"></i>
    </a>
    <button class="btn btn-primary">
        Guardar
        <i class="fa-solid fa-floppy-disk"></i>
    </button>
</div>
