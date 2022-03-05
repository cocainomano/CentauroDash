<div class="box box-info padding-1">
    <div class="box-body">
        <div class="form-group">
            {{ Form::label('Proveedor') }}
            {{ Form::select('idProveedor', $proveedor, $portafolio->idProveedor, ['class' => 'form-control' . ($errors->has('idProveedor') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione Proveedor']) }}
            {!! $errors->first('idProveedor', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombre Producto') }}
            {{ Form::text('NombreProducto', $portafolio->NombreProducto, ['class' => 'form-control' . ($errors->has('NombreProducto') ? ' is-invalid' : ''), 'placeholder' => 'Nombre del Producto o Servicio']) }}
            {!! $errors->first('NombreProducto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombre Clave') }}
            {{ Form::text('NombreCve', $portafolio->NombreCve, ['class' => 'form-control' . ($errors->has('NombreCve') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Clave']) }}
            {!! $errors->first('NombreCve', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Descripción') }}     
            {{ Form::textarea('Descripcion', $portafolio->Descripcion, ['class' => 'form-control' . ($errors->has('Descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('Descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Condiciones') }}
            {{ Form::textarea('Condiciones', $portafolio->Condiciones, ['class' => 'form-control' . ($errors->has('Condiciones') ? ' is-invalid' : ''), 'placeholder' => 'Condiciones']) }}
            {!! $errors->first('Condiciones', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Costo Proveedor') }}
            {{ Form::text('Costo_Proveedor', $portafolio->Costo_Proveedor, ['class' => 'form-control' . ($errors->has('Costo_Proveedor') ? ' is-invalid' : ''), 'placeholder' => 'Ej: 1.00 (sin %)']) }}
            {!! $errors->first('Costo_Proveedor', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Precio Venta Centauro') }}
            {{ Form::text('Venta_Centauro', $portafolio->Venta_Centauro, ['class' => 'form-control' . ($errors->has('Venta_Centauro') ? ' is-invalid' : ''), 'placeholder' => 'Ej: 3.00 (sin %)']) }}
            {!! $errors->first('Venta_Centauro', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Utilidad Centauro') }}
            {{ Form::text('Utilidad_Centauro', $portafolio->Utilidad_Centauro, ['class' => 'form-control' . ($errors->has('Utilidad_Centauro') ? ' is-invalid' : ''), 'placeholder' => 'Ej: 2.00 (sin %)']) }}
            {!! $errors->first('Utilidad_Centauro', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>