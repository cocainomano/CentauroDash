<div class="box box-info padding-1">
    <div class="box-body">
        {{ Form::hidden('Created_by', auth()->id()) }}
        <div class="form-group">
            {{ Form::label('Sucursal') }}
            {{ Form::select('idSucursal',$sucursal, $franquicia->idSucursal, ['class' => 'form-control' . ($errors->has('idProveedor') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione Sucursal']) }}
            {!! $errors->first('idSucursal', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('Nombre', $franquicia->Nombre, ['class' => 'form-control' . ($errors->has('Nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('Nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Clave') }}
            {{ Form::text('NombreCve', $franquicia->NombreCve, ['class' => 'form-control' . ($errors->has('NombreCve') ? ' is-invalid' : ''), 'placeholder' => 'Ej: BCS_LAPAZ']) }}
            {!! $errors->first('NombreCve', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('RFC') }}
            {{ Form::text('RFC', $franquicia->RFC, ['class' => 'form-control' . ($errors->has('RFC') ? ' is-invalid' : ''), 'placeholder' => 'RFC']) }}
            {!! $errors->first('RFC', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Razon Social') }}
            {{ Form::text('RazonSocial', $franquicia->RazonSocial, ['class' => 'form-control' . ($errors->has('RazonSocial') ? ' is-invalid' : ''), 'placeholder' => 'Razon Social']) }}
            {!! $errors->first('RazonSocial', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Calle') }}
            {{ Form::text('Calle', $franquicia->Calle, ['class' => 'form-control' . ($errors->has('Calle') ? ' is-invalid' : ''), 'placeholder' => 'Calle']) }}
            {!! $errors->first('Calle', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Colonia') }}
            {{ Form::text('Colonia', $franquicia->Colonia, ['class' => 'form-control' . ($errors->has('Colonia') ? ' is-invalid' : ''), 'placeholder' => 'Colonia']) }}
            {!! $errors->first('Colonia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Ciudad') }}
            {{ Form::text('Ciudad', $franquicia->Ciudad, ['class' => 'form-control' . ($errors->has('Ciudad') ? ' is-invalid' : ''), 'placeholder' => 'Ciudad']) }}
            {!! $errors->first('Ciudad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Municipio') }}
            {{ Form::text('Municipio', $franquicia->Municipio, ['class' => 'form-control' . ($errors->has('Municipio') ? ' is-invalid' : ''), 'placeholder' => 'Municipio']) }}
            {!! $errors->first('Municipio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Estado') }}
            {{ Form::text('Estado', $franquicia->Estado, ['class' => 'form-control' . ($errors->has('Estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
            {!! $errors->first('Estado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('CP') }}
            {{ Form::text('CP', $franquicia->CP, ['class' => 'form-control' . ($errors->has('CP') ? ' is-invalid' : ''), 'placeholder' => 'Ej: 06820']) }}
            {!! $errors->first('CP', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Email') }}
            {{ Form::text('Email', $franquicia->Email, ['class' => 'form-control' . ($errors->has('Email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
            {!! $errors->first('Email', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Celular') }}
            {{ Form::text('Celular', $franquicia->Celular, ['class' => 'form-control' . ($errors->has('Celular') ? ' is-invalid' : ''), 'placeholder' => 'Celular']) }}
            {!! $errors->first('Celular', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('WhatsApp') }}
            {{ Form::text('WhatsApp', $franquicia->WhatsApp, ['class' => 'form-control' . ($errors->has('WhatsApp') ? ' is-invalid' : ''), 'placeholder' => 'Whatsapp']) }}
            {!! $errors->first('WhatsApp', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Banco') }}
            {{ Form::text('Banco', $franquicia->Banco, ['class' => 'form-control' . ($errors->has('Banco') ? ' is-invalid' : ''), 'placeholder' => 'Banco']) }}
            {!! $errors->first('Banco', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('NumTarjeta') }}
            {{ Form::text('NumTarjeta', $franquicia->NumTarjeta, ['class' => 'form-control' . ($errors->has('NumTarjeta') ? ' is-invalid' : ''), 'placeholder' => 'Ej: 9989 9992 9992 0001']) }}
            {!! $errors->first('NumTarjeta', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('CLABE') }}
            {{ Form::text('CLABE', $franquicia->CLABE, ['class' => 'form-control' . ($errors->has('CLABE') ? ' is-invalid' : ''), 'placeholder' => 'CLABE INTERBANCARIA']) }}
            {!! $errors->first('CLABE', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>