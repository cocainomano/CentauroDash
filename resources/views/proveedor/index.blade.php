<?php /* {{ route('proveedor.create') }} 
destroy: {{ route('proveedors.destroy',$proveedor->id) }}
view: {{ route('proveedors.show',$proveedor->id) }}
edit: {{ route('proveedors.edit',$proveedor->id) }}

*/
?>
@extends("flowdash::layouts.{$layout}", [
  'title' => 'Proveedores',
  'breadcrumb' => [[
    'title' => 'Modulo Proveedores'
  ], [
    'title' => 'Listado de Proovedores'
  ]],
  'new_button_label' => false
])
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/d2427e5d14.js" crossorigin="anonymous"></script>


@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Proveedor') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('proveedor.create') }} " class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Dar de Alta Proveedor') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table mb-0 thead-border-top-0">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Nombre</th>
										<th>Nombre Clave</th>
										<th>Email</th>
										<th>Celular</th>
										<th>Whatsapp</th>
										<th>Banco</th>
										<th>Numtarjeta</th>
										<th>Clabe</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody class="list">
                                    @foreach ($proveedors as $proveedor)
                                        <tr class="pr-0">
                                            <td>{{ ++$i }}</td>
                                            
											<td><span class="js-lists-values-employee-name">{{ $proveedor->Nombre }}</span></td>
											<td><span class="badge badge-warning">{{ $proveedor->NombreCve }}</span> </td>
											<td>{{ $proveedor->Email }}</td>
											<td>{{ $proveedor->Celular }}</td>
											<td>{{ $proveedor->WhatsApp }}</td>
											<td>{{ $proveedor->Banco }}</td>
											<td><small class="text-muted">{{ $proveedor->NumTarjeta }}</small></td>
											<td><small class="text-muted">{{ $proveedor->CLABE }}</small></td>
											

                                            <td>
                                                <form action="{{ route('proveedor.destroy',$proveedor->id) }}"  method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('proveedor.show',$proveedor->id) }}"><i class="fa fa-fw fa-eye"></i> Mostrar</a>
                                                    <a class="btn btn-sm btn-success"  href="{{ Route('proveedor.edit',$proveedor->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
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
                {!! $proveedors->links() !!}
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