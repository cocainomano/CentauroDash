<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Sucursal') }}
            {{ Form::select('idSucursal',$sucursal, $socio->idSucursal, ['class' => 'form-control' . ($errors->has('idProveedor') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione Sucursal']) }}
            {!! $errors->first('idSucursal', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Usuario') }}
            {{ Form::select('idUser',$user, $socio->idUser, ['class' => 'form-control' . ($errors->has('idUser') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione Usuario']) }}
            {!! $errors->first('idUser', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Participacion') }}
            {{ Form::text('Participacion', $socio->Participacion, ['class' => 'form-control' . ($errors->has('Participacion') ? ' is-invalid' : ''), 'placeholder' => 'Participacion']) }}
            {!! $errors->first('Participacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>