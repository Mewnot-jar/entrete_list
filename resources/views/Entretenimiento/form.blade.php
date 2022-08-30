<div class="form-group">
    <label for="Nombre">Formato</label>
    {{ Form::select('formato_id', $formatos, $entretenimiento->formato_id) }}
</div>
<div class="form-group">
    <label for="descripcion">Descripcion</label>
    <input type="text" name="descripcion" value="{{isset($entretenimiento->descripcion)?$entretenimiento->descripcion:old('descripcion')}}" class="form-control">
</div>
<div class="form-group">
    <label for="estado">Estado</label>
    <input type="text" name="estado" value="{{isset($entretenimiento->estado)?$entretenimiento->estado:old('estado')}}" class="form-control">
</div>
    <input class="btn btn-primary" type="submit" value="Ingresar datos">
</div>
