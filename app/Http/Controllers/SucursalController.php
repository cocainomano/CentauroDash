<?php

namespace App\Http\Controllers;

use App\Models\Sucursal;
use Illuminate\Http\Request;

/**
 * Class SucursalController
 * @package App\Http\Controllers
 */
class SucursalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sucursals = Sucursal::paginate();

        return view('sucursal.index', compact('sucursals'))
            ->with('i', (request()->input('page', 1) - 1) * $sucursals->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sucursal = new Sucursal();
        return view('sucursal.create', compact('sucursal'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Sucursal::$rules);

        $sucursal = Sucursal::create($request->all());

        return redirect()->route('Sucursals.index')
            ->with('success', 'Sucursal created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sucursal = Sucursal::find($id);

        return view('sucursal.show', compact('sucursal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sucursal = Sucursal::find($id);

        return view('Sucursal.edit', compact('sucursal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Sucursal $sucursal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sucursal $sucursal,$id)
    {

        $sucursal = Sucursal::find($id);
        $sucursal->Nombre        = $request->input('Nombre');
        $sucursal->Ubicacion     = $request->input('Ubicacion');
        $sucursal->NombreCve     = $request->input('NombreCve');
        $sucursal->RFC           = $request->input('RFC');
        $sucursal->RazonSocial   = $request->input('RazonSocial');
        $sucursal->Calle         = $request->input('Calle');
        $sucursal->Colonia       = $request->input('Colonia');
        $sucursal->Ciudad        = $request->input('Ciudad');
        $sucursal->Municipio     = $request->input('Municipio');
        $sucursal->Estado        = $request->input('Estado');
        $sucursal->CP            = $request->input('CP');
        $sucursal->Email         = $request->input('Email');
        $sucursal->Celular       = $request->input('Celular');
        $sucursal->WhatsApp      = $request->input('WhatsApp');
        $sucursal->Banco         = $request->input('Banco');
        $sucursal->NumTarjeta    = $request->input('NumTarjeta');
        $sucursal->CLABE         = $request->input('CLABE');
        $sucursal->Created_by    = $request->input('Created_by');
        $sucursal->update();
        return redirect()->route('Sucursals.index')
            ->with('success', 'Datos actualizados');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $sucursal = Sucursal::find($id)->delete();

        return redirect()->route('Sucursals.index')
            ->with('success', 'Sucursal eliminada exitosamente');
    }
}

