@extends("flowdash::layouts.{$layout}", [
  'title' => 'Sucursales',
  'breadcrumb' => [[
    'title' => 'Modulo Sucursales'
  ], [
    'title' => 'Listado de Sucursales'
  ]],
  'new_button_label' => false
])
@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Detalles de la Sucursal</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('Sucursals.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $sucursal->Nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Ubicacion:</strong>
                            {{ $sucursal->Ubicacion }}
                        </div>
                        <div class="form-group">
                            <strong>Nombrecve:</strong>
                            {{ $sucursal->NombreCve }}
                        </div>
                        <div class="form-group">
                            <strong>Rfc:</strong>
                            {{ $sucursal->RFC }}
                        </div>
                        <div class="form-group">
                            <strong>Razonsocial:</strong>
                            {{ $sucursal->RazonSocial }}
                        </div>
                        <div class="form-group">
                            <strong>Calle:</strong>
                            {{ $sucursal->Calle }}
                        </div>
                        <div class="form-group">
                            <strong>Colonia:</strong>
                            {{ $sucursal->Colonia }}
                        </div>
                        <div class="form-group">
                            <strong>Ciudad:</strong>
                            {{ $sucursal->Ciudad }}
                        </div>
                        <div class="form-group">
                            <strong>Municipio:</strong>
                            {{ $sucursal->Municipio }}
                        </div>
                        <div class="form-group">
                            <strong>Cp:</strong>
                            {{ $sucursal->CP }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $sucursal->Email }}
                        </div>
                        <div class="form-group">
                            <strong>Celular:</strong>
                            {{ $sucursal->Celular }}
                        </div>
                        <div class="form-group">
                            <strong>Whatsapp:</strong>
                            {{ $sucursal->WhatsApp }}
                        </div>
                        <div class="form-group">
                            <strong>Banco:</strong>
                            {{ $sucursal->Banco }}
                        </div>
                        <div class="form-group">
                            <strong>Numtarjeta:</strong>
                            {{ $sucursal->NumTarjeta }}
                        </div>
                        <div class="form-group">
                            <strong>Clabe:</strong>
                            {{ $sucursal->CLABE }}
                        </div>
                        <div class="form-group">
                            <strong>Created By:</strong>
                            {{ $sucursal->Created_by }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('head')
<!-- Flatpickr -->
<link type="text/css" href="{{ mix('css/vendor/flatpickr.css') }}"          rel="stylesheet">
<link type="text/css" href="{{ mix('css/vendor/flatpickr-airbnb.css') }}"   rel="stylesheet">

<!-- Quill Theme -->
<link type="text/css" href="{{ mix('css/vendor/quill.css') }}"              rel="stylesheet">

<!-- Dropzone -->
<link type="text/css" href="{{ mix('css/vendor/dropzone.css') }}"           rel="stylesheet">

<!-- Select2 -->
<link type="text/css" href="{{ mix('vendor/select2/select2.min.css') }}"    rel="stylesheet">
<link type="text/css" href="{{ mix('css/vendor/select2.css') }}"            rel="stylesheet">
@endsection

@section('footer')
<!-- Flatpickr -->
<script src="{{ mix('vendor/flatpickr/flatpickr.min.js') }}" defer></script>
<script src="{{ mix('js/flatpickr.js') }}" defer></script>

<!-- Dropzone -->
<script src="{{ mix('vendor/dropzone.min.js') }}" defer></script>
<script src="{{ mix('js/dropzone.js') }}" defer></script>

<!-- jQuery Mask Plugin -->
<script src="{{ mix('vendor/jquery.mask.min.js') }}" defer></script>

<!-- Quill -->
<script src="{{ mix('vendor/quill.min.js') }}" defer></script>
<script src="{{ mix('js/quill.js') }}" defer></script>

<!-- Select2 -->
<script src="{{ mix('vendor/select2/select2.min.js') }}" defer></script>
<script src="{{ mix('js/select2.js') }}" defer></script>
@endsection