<div class="form-group">
    <label for="Nombre">Formato</label>
    {{ Form::select('formato_id', $formatos, $entretenimiento->formato_id) }}
</div>
<div class="form-group">
    <label for="ApellidoPaterno">Descripcion</label>
    <input type="text" name="descripcion" value="{{isset($empleado->ApellidoPaterno)?$empleado->ApellidoPaterno:old('ApellidoPaterno')}}" class="form-control">
</div>
<div class="form-group">
    <label for="ApellidoMaterno">Estado</label>
    <input type="text" name="estado" value="{{isset($empleado->ApellidoMaterno)?$empleado->ApellidoMaterno:old('ApellidoMaterno')}}" class="form-control">
</div>
    <input class="btn btn-primary" type="submit" value="Ingresar datos">
</div>
