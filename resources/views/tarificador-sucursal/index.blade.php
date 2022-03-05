@extends("flowdash::layouts.{$layout}", [
  'title' => 'Tarificador Sucursal',
  'breadcrumb' => [[
    'title' => 'Modulo Tarifador'
  ], [
    'title' => 'Tarifas Sucursal'
  ]],
  'new_button_label' => false
])
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Tarificador Sucursal') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('TarificadorSucursal.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Asignar Tarifa de Producto a Sucursal') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif  
                    @if ($message = Session::get('error'))
                        <div class="alert" style="background-color: red; color:#FFF;font-size:30px">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Producto Portafolio</th>
										<th>Sucursal</th>
										<th>Costo Centauro</th>
										<th>Precio a Franquicia</th>
										<th>Utilidad de la Sucursal</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tarificadorSucursals as $tarificadorSucursal)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $tarificadorSucursal->Portafolio->NombreProducto }}</td>
											<td>{{ $tarificadorSucursal->sucursal->Nombre }}</td>
											<td style="text-align: center;">{{ $tarificadorSucursal->CostoCentauro }}%</td>
											<td style="text-align: center;">{{ $tarificadorSucursal->PrecioVentaFranquicia }}%</td>
											<td style="text-align: center;">{{ $tarificadorSucursal->UtilidadSucursal }}%</td>
                                            <td>
                                                <form action="{{ route('TarificadorSucursal.destroy',$tarificadorSucursal->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('TarificadorSucursal.show',$tarificadorSucursal->id) }}"><i class="fa fa-fw fa-eye"></i> Detalles</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('TarificadorSucursal.edit',$tarificadorSucursal->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $tarificadorSucursals->links() !!}
            </div>
        </div>
    </div>
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