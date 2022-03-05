<div class="box box-info padding-1">
    <div class="box-body">
        {{ Form::hidden('Created_by', auth()->id()) }}
        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('Nombre', $proveedor->Nombre, ['class' => 'form-control' . ($errors->has('Nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('Nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('NombreCve') }}
            {{ Form::text('NombreCve', $proveedor->NombreCve, ['class' => 'form-control' . ($errors->has('NombreCve') ? ' is-invalid' : ''), 'placeholder' => 'Nombrecve']) }}
            {!! $errors->first('NombreCve', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Email') }}
            {{ Form::text('Email', $proveedor->Email, ['class' => 'form-control' . ($errors->has('Email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
            {!! $errors->first('Email', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Celular') }}
            {{ Form::text('Celular', $proveedor->Celular, ['class' => 'form-control' . ($errors->has('Celular') ? ' is-invalid' : ''), 'placeholder' => 'Celular']) }}
            {!! $errors->first('Celular', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('WhatsApp') }}
            {{ Form::text('WhatsApp', $proveedor->WhatsApp, ['class' => 'form-control' . ($errors->has('WhatsApp') ? ' is-invalid' : ''), 'placeholder' => 'Whatsapp']) }}
            {!! $errors->first('WhatsApp', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Banco') }}
            {{ Form::text('Banco', $proveedor->Banco, ['class' => 'form-control' . ($errors->has('Banco') ? ' is-invalid' : ''), 'placeholder' => 'Banco']) }}
            {!! $errors->first('Banco', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('NumTarjeta') }}
            {{ Form::text('NumTarjeta', $proveedor->NumTarjeta, ['class' => 'form-control' . ($errors->has('NumTarjeta') ? ' is-invalid' : ''), 'placeholder' => 'Numtarjeta']) }}
            {!! $errors->first('NumTarjeta', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('CLABE') }}
            {{ Form::text('CLABE', $proveedor->CLABE, ['class' => 'form-control' . ($errors->has('CLABE') ? ' is-invalid' : ''), 'placeholder' => 'Clabe']) }}
            {!! $errors->first('CLABE', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>