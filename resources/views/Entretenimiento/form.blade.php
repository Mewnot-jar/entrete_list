<div class="d-flex justify-content-center">
    <h1>{{$modo}} entretenimiento</h1>
</div>
<div class="form-group">
    <label for="Nombre">Formato</label>
    {{ Form::select('formato_id', $formatos, $entretenimiento->formato_id, ['class' => 'form-control', 'placeholder' => '-Formato-']) }}
</div>
<div class="form-group">
    <label for="descripcion">Descripcion</label>
    <input type="text" name="descripcion"
        value="{{ isset($entretenimiento->descripcion) ? $entretenimiento->descripcion : old('descripcion') }}"
        class="form-control">
</div>
<div class="form-group">
    <label for="estado">Estado</label>
    <input type="text" name="estado"
        value="{{ isset($entretenimiento->estado) ? $entretenimiento->estado : old('estado') }}" class="form-control">
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
