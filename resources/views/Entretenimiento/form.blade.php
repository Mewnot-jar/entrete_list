<h1>{{$modo}} entretenimiento</h1>
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
    <label for="formato_id">Formato</label>
    {{ Form::select('formato_id', $formatos, $entretenimiento->formato_id, ['class' => 'form-control', 'placeholder' => '-Formato-']) }}
    <small class="form-text text-white">Ingresa que tipo de formato tiene. Ejemplo: Manga.</small>
</div>
<div class="form-group">
    <label for="descripcion">Descripcion</label>
    <input type="text" name="descripcion"
        value="{{ isset($entretenimiento->descripcion) ? $entretenimiento->descripcion : old('descripcion') }}"
        class="form-control">
        <small class="form-text text-white">Ingresa el entretenimiento. Ejemplo: Berserk.</small>
</div>
<div class="form-group">
    <label for="estado">Estado</label>
    <select name="estado" class="form-control">
        <option value="">-Estado-</option>
        <option {{ ($entretenimiento->estado) == 'Pendiente' ? 'selected' : '' }} value="Pendiente">Pendiente</option>
        <option {{ ($entretenimiento->estado) == 'En curso' ? 'selected' : '' }} value="En curso">En curso</option>
        <option {{ ($entretenimiento->estado) == 'Finalizado' ? 'selected' : '' }} value="Finalizado">Finalizado</option>
    </select>
        <small class="form-text text-white">Ingresa como vas con el entretenimiento. Ejemplo: Leyendo.</small>
</div>
<div class="d-flex justify-content-between">
    <a class="btn btn-danger" href="{{url('/entretenimiento/')}}">
        <i class="fa-solid fa-circle-left"></i>
    </a>
    <button class="btn btn-primary">
        Guardar
        <i class="fa-solid fa-floppy-disk"></i>
    </button>
</div>
