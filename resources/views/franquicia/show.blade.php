@extends("flowdash::layouts.{$layout}", [
  'title' => 'Franquicia',
  'breadcrumb' => [[
    'title' => 'Modulo Franquicia'
  ], [
    'title' => 'Detalle de Franquicia'
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
                            <span class="card-title">Detalle de Franquicia</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('Franquicias.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Sucursal:</strong>
                            {{ $franquicia->sucursal->Nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $franquicia->Nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Clave:</strong>
                            {{ $franquicia->NombreCve }}
                        </div>
                        <div class="form-group">
                            <strong>RFC:</strong>
                            {{ $franquicia->RFC }}
                        </div>
                        <div class="form-group">
                            <strong>Razon Social:</strong>
                            {{ $franquicia->RazonSocial }}
                        </div>
                        <div class="form-group">
                            <strong>Calle:</strong>
                            {{ $franquicia->Calle }}
                        </div>
                        <div class="form-group">
                            <strong>Colonia:</strong>
                            {{ $franquicia->Colonia }}
                        </div>
                        <div class="form-group">
                            <strong>Ciudad:</strong>
                            {{ $franquicia->Ciudad }}
                        </div>
                        <div class="form-group">
                            <strong>Municipio:</strong>
                            {{ $franquicia->Municipio }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $franquicia->Estado }}
                        </div>
                        <div class="form-group">
                            <strong>CP:</strong>
                            {{ $franquicia->CP }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $franquicia->Email }}
                        </div>
                        <div class="form-group">
                            <strong>Celular:</strong>
                            {{ $franquicia->Celular }}
                        </div>
                        <div class="form-group">
                            <strong>Whatsapp:</strong>
                            {{ $franquicia->WhatsApp }}
                        </div>
                        <div class="form-group">
                            <strong>Banco:</strong>
                            {{ $franquicia->Banco }}
                        </div>
                        <div class="form-group">
                            <strong>Numtarjeta:</strong>
                            {{ $franquicia->NumTarjeta }}
                        </div>
                        <div class="form-group">
                            <strong>Clabe:</strong>
                            {{ $franquicia->CLABE }}
                        </div>
                        <div class="form-group">
                            <strong>Created By:</strong>
                            {{ $franquicia->Created_by }}
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
