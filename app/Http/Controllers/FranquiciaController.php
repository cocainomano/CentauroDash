<?php

namespace App\Http\Controllers;

use App\Models\Franquicia;
use App\Models\Sucursal;
use Illuminate\Http\Request; 

/**
 * Class FranquiciaController
 * @package App\Http\Controllers
 */
class FranquiciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $franquicias = Franquicia::paginate();
        $sucursal = Sucursal::pluck('Nombre','id');

        return view('franquicia.index', compact('franquicias','sucursal'))
            ->with('i', (request()->input('page', 1) - 1) * $franquicias->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $franquicia = new Franquicia();
        $sucursal = Sucursal::pluck('Nombre','id');
        return view('franquicia.create', compact('franquicia','sucursal'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Franquicia::$rules);

        $franquicia = Franquicia::create($request->all());

        return redirect()->route('Franquicias.index')
            ->with('success', 'Franquicia created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $franquicia = Franquicia::find($id);
        //return response()->json(compact('franquicia'));
        return view('franquicia.show', compact('franquicia'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $franquicia = Franquicia::find($id);
        $sucursal = Sucursal::pluck('Nombre','id');
        return view('franquicia.edit', compact('franquicia','sucursal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Franquicia $franquicia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Franquicia $franquicia,$id)
    {
        $franquicia                = Franquicia::find($id);
        $franquicia->idSucursal    = $request->input('idSucursal');
        $franquicia->Nombre        = $request->input('Nombre');
        $franquicia->NombreCve     = $request->input('NombreCve');
        $franquicia->RFC           = $request->input('RFC');
        $franquicia->RazonSocial   = $request->input('RazonSocial');
        $franquicia->Calle         = $request->input('Calle');
        $franquicia->Colonia       = $request->input('Colonia');
        $franquicia->Ciudad        = $request->input('Ciudad');
        $franquicia->Municipio     = $request->input('Municipio');
        $franquicia->Estado        = $request->input('Estado');
        $franquicia->CP            = $request->input('CP');
        $franquicia->Email         = $request->input('Email');
        $franquicia->Celular       = $request->input('Celular');
        $franquicia->WhatsApp      = $request->input('WhatsApp');
        $franquicia->Banco         = $request->input('Banco');
        $franquicia->NumTarjeta    = $request->input('NumTarjeta');
        $franquicia->CLABE         = $request->input('CLABE');
        $franquicia->Created_by    = $request->input('Created_by');

        $franquicia->update();

        return redirect()->route('Franquicias.index')
            ->with('success', 'Registro Actualizado exitosamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $franquicia = Franquicia::find($id)->delete();

        return redirect()->route('Franquicias.index')
            ->with('success', 'Franquicia deleted successfully');
    }
}
