@extends('layouts.app')

@section('template_title')
    {{ $tarificadorSucursal->name ?? 'Show Tarificador Sucursal' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Tarificador Sucursal</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tarificador-sucursals.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Idportafolio:</strong>
                            {{ $tarificadorSucursal->idPortafolio }}
                        </div>
                        <div class="form-group">
                            <strong>Idsucursal:</strong>
                            {{ $tarificadorSucursal->idSucursal }}
                        </div>
                        <div class="form-group">
                            <strong>Costocentauro:</strong>
                            {{ $tarificadorSucursal->CostoCentauro }}
                        </div>
                        <div class="form-group">
                            <strong>Precioventafranquicia:</strong>
                            {{ $tarificadorSucursal->PrecioVentaFranquicia }}
                        </div>
                        <div class="form-group">
                            <strong>Utilidadsucursal:</strong>
                            {{ $tarificadorSucursal->UtilidadSucursal }}
                        </div>
                        <div class="form-group">
                            <strong>Created By:</strong>
                            {{ $tarificadorSucursal->Created_by }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
