<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<div class="box box-info padding-1">
    <div class="box-body">
        {{ Form::hidden('Created_by', auth()->id()) }}
        <div class="form-group">
            {{ Form::label('Sucursal') }}
            {{ Form::select('idSucursal',$sucursal, $franquicitario->idSucursal, ['id'=>'Sucursal', 'class' => 'Sucursal form-control' . ($errors->has('idSucursal') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione Sucursal']) }}
            {!! $errors->first('idSucursal', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Franquicia') }}
            <?php //{{ Form::select('idFranquicia',$franquicia, $franquicitario->idFranquicia, ['id'=>'Franquicia' ,'class' => 'Franquicia form-control' . ($errors->has('idFranquicia') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione Franquicia']) }} ?>
            <select id='Franquicia' name='idFranquicia' class="form-control">
                <option>Seleccione Franquicia</option>
                <script type='text/javascript'>
                    $(document).ready(function(){
                        $('#Sucursal').change(function(){
                            var id = $(this).val();
                            var data={id:id};
                            $('#Franquicia').find('option').not(':first').remove();
                                $.ajax({
                                    url: "{{route('Franquicias.GetSuc','3')}}",
                                    type: 'get',
                                    data: data,
                                    dataType: 'json',
                                    success: function(response) {
                                    $.each(response, function (indice, row) {     
                                            $("#Franquicia").append("<option value='" + row.id + "'>" + row.Nombre + "</option>");
                                    });
                                }
                            });
                        });
                    });
                </script>
            </select>
            {!! $errors->first('idFranquicia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Usuario') }}
            {{ Form::select('idUser',$user, $franquicitario->idUser, ['class' => 'form-control' . ($errors->has('idFranquicia') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione Usuario']) }}
            {!! $errors->first('idUser', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Utilidad') }}
            {{ Form::text('Utilidad', $franquicitario->Utilidad, ['class' => 'form-control' . ($errors->has('Utilidad') ? ' is-invalid' : ''), 'placeholder' => 'Utilidad']) }}
            {!! $errors->first('Utilidad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>
