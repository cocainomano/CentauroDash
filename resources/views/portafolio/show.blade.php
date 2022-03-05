@extends("flowdash::layouts.{$layout}", [
  'title' => 'Portafolio',
  'breadcrumb' => [[
    'title' => 'Modulo Portafolio'
  ], [
    'title' => 'Detalle del Producto'
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
                            <span class="card-title">Detalle del Producto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('Portafolios.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Proveedor:</strong>
                            {{ $portafolio->proveedor->NombreCve }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Producto:</strong>
                            {{ $portafolio->NombreProducto }}
                        </div>
                        <div class="form-group">
                            <strong>Clave:</strong>
                            {{ $portafolio->NombreCve }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            <pre style="font-family: Roboto, sans-serif; font-size:14px; color: #112b4a;">
                            {{ $portafolio->Descripcion }}
                            </pre>
                        </div>
                        <div class="form-group">
                            <strong>Condiciones:</strong>
                            {{ $portafolio->Condiciones }}
                        </div>
                        <div class="form-group">
                            <strong>Costo Proveedor:</strong>
                            {{ $portafolio->Costo_Proveedor }}%
                        </div>
                        <div class="form-group">
                            <strong>Venta Centauro:</strong>
                            {{ $portafolio->Venta_Centauro }}%
                        </div>
                        <div class="form-group">
                            <strong>Utilidad Centauro:</strong>
                            {{ $portafolio->Utilidad_Centauro }}%
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