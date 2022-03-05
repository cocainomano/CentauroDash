<div class="box box-info padding-1">
    <div class="box-body">
        {{ Form::hidden('Created_by', auth()->id()) }}
        
        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('Nombre', $sucursal->Nombre, ['class' => 'form-control' . ($errors->has('Nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('Nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Ubicacion') }}
            {{ Form::text('Ubicacion', $sucursal->Ubicacion, ['class' => 'form-control' . ($errors->has('Ubicacion') ? ' is-invalid' : ''), 'placeholder' => 'Ubicacion']) }}
            {!! $errors->first('Ubicacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Clave') }}
            {{ Form::text('NombreCve', $sucursal->NombreCve, ['class' => 'form-control' . ($errors->has('NombreCve') ? ' is-invalid' : ''), 'placeholder' => 'Clave']) }}
            {!! $errors->first('NombreCve', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('RFC') }}
            {{ Form::text('RFC', $sucursal->RFC, ['class' => 'form-control' . ($errors->has('RFC') ? ' is-invalid' : ''), 'placeholder' => 'RFC']) }}
            {!! $errors->first('RFC', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Razon Social') }}
            {{ Form::text('RazonSocial', $sucursal->RazonSocial, ['class' => 'form-control' . ($errors->has('RazonSocial') ? ' is-invalid' : ''), 'placeholder' => 'Razon Social']) }}
            {!! $errors->first('RazonSocial', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Calle') }}
            {{ Form::text('Calle', $sucursal->Calle, ['class' => 'form-control' . ($errors->has('Calle') ? ' is-invalid' : ''), 'placeholder' => 'Calle']) }}
            {!! $errors->first('Calle', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Colonia') }}
            {{ Form::text('Colonia', $sucursal->Colonia, ['class' => 'form-control' . ($errors->has('Colonia') ? ' is-invalid' : ''), 'placeholder' => 'Colonia']) }}
            {!! $errors->first('Colonia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Ciudad') }}
            {{ Form::text('Ciudad', $sucursal->Ciudad, ['class' => 'form-control' . ($errors->has('Ciudad') ? ' is-invalid' : ''), 'placeholder' => 'Ciudad']) }}
            {!! $errors->first('Ciudad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Municipio') }}
            {{ Form::text('Municipio', $sucursal->Municipio, ['class' => 'form-control' . ($errors->has('Municipio') ? ' is-invalid' : ''), 'placeholder' => 'Municipio']) }}
            {!! $errors->first('Municipio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Estado') }}
            {{ Form::text('Estado', $sucursal->Estado, ['class' => 'form-control' . ($errors->has('Estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
            {!! $errors->first('Estado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Codigo Postal') }}
            {{ Form::text('CP', $sucursal->CP, ['class' => 'form-control' . ($errors->has('CP') ? ' is-invalid' : ''), 'placeholder' => '06820']) }}
            {!! $errors->first('CP', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Email') }}
            {{ Form::text('Email', $sucursal->Email, ['class' => 'form-control' . ($errors->has('Email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
            {!! $errors->first('Email', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Celular') }}
            {{ Form::text('Celular', $sucursal->Celular, ['class' => 'form-control' . ($errors->has('Celular') ? ' is-invalid' : ''), 'placeholder' => 'Celular']) }}
            {!! $errors->first('Celular', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('WhatsApp') }}
            {{ Form::text('WhatsApp', $sucursal->WhatsApp, ['class' => 'form-control' . ($errors->has('WhatsApp') ? ' is-invalid' : ''), 'placeholder' => 'Whatsapp']) }}
            {!! $errors->first('WhatsApp', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Banco') }}
            {{ Form::text('Banco', $sucursal->Banco, ['class' => 'form-control' . ($errors->has('Banco') ? ' is-invalid' : ''), 'placeholder' => 'Banco']) }}
            {!! $errors->first('Banco', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Número de Tarjeta') }}
            {{ Form::text('NumTarjeta', $sucursal->NumTarjeta, ['class' => 'form-control' . ($errors->has('NumTarjeta') ? ' is-invalid' : ''), 'placeholder' => '2330 0000 2222 0099']) }}
            {!! $errors->first('NumTarjeta', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('CLABE Interbancaria') }}
            {{ Form::text('CLABE', $sucursal->CLABE, ['class' => 'form-control' . ($errors->has('CLABE') ? ' is-invalid' : ''), 'placeholder' => 'Clabe']) }}
            {!! $errors->first('CLABE', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>