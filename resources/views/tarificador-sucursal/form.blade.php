<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::hidden('Created_by', auth()->id()) }}
            {{ Form::label('Portafolio') }}
            {{ Form::select('idPortafolio',$portafolio, $tarificadorSucursal->idPortafolio, ['id'=>'Portafolio', 'class' => 'Portafolio form-control' . ($errors->has('idPortafolio') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione Producto del Portafolio']) }}
            {!! $errors->first('idPortafolio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Sucursal') }}
            {{ Form::select('idSucursal',$sucursal, $tarificadorSucursal->idSucursal, ['id'=>'Sucursal', 'class' => 'Sucursal form-control' . ($errors->has('idProveedor') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione Sucursal']) }}
            {!! $errors->first('idSucursal', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Precio Centauro') }}
            <input text name='CostoCentauro' class="form-control CostoCentauro" id="CostoCentauro" value="{{$tarificadorSucursal->CostoCentauro}}" readonly>
            <script type='text/javascript'>
                $(document).ready(function(){
                    $('#Portafolio').change(function(){
                        var id = $(this).val();
                        var data={id:id};
                       // $('#CostoCentauro').find('option').not(':first').remove();
                            $.ajax({
                                url: "{{route('Tarifa.Centauro','3')}}",
                                type: 'get',
                                data: data,
                                dataType: 'json',
                                success: function(response) {
                                $.each(response, function (indice, row) {     
                                        $('.CostoCentauro').val(row["Utilidad_Centauro"]);
                                });
                            }
                        });
                    });
                });
            </script>
            {!! $errors->first('CostoCentauro', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Precio a Franquicia - Nota: Esta cifra debe de ser superior al PRECIO que ofrece CENTAURO, ya que la Utilidad se calcula en base a ello.') }}
            {{ Form::text('PrecioVentaFranquicia', $tarificadorSucursal->PrecioVentaFranquicia, ['id'=>'PrecioVentaFranquicia','class' => 'form-control PrecioVentaFranquicia' . ($errors->has('PrecioVentaFranquicia') ? ' is-invalid' : ''), 'placeholder' => 'Ejemplo: 2.00']) }}
            {!! $errors->first('PrecioVentaFranquicia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Utilidad Sucursal') }}
            <input text name="UtilidadSucursal" class="form-control UtilidadSucursal" id="UtilidadSucursal" value="{{$tarificadorSucursal->UtilidadSucursal}}" readonly>
            <script type='text/javascript'>
                $(document).ready(function(){
                    $('#PrecioVentaFranquicia').change(function(){
                        var PrecioFranquicia = $(this).val();
                        var CentauroCosto = $('.CostoCentauro').val();
                        var UtilidadSuc =PrecioFranquicia - CentauroCosto;
                        if (UtilidadSuc<0){
                            alert ("La utilidad no puede ser menor a cero, revise el Precio a Franquicia");
                            $('.UtilidadSucursal').val("ERROR")
                            return;
                        }
                        $('.UtilidadSucursal').val(UtilidadSuc);
                    });
                });
            </script>
            {!! $errors->first('UtilidadSucursal', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>