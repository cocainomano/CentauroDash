<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Proveedor;

/**
 * Class ProveedorController
 * @package App\Http\Controllers
 */
class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proveedors = Proveedor::paginate();

        return view('proveedor.index', compact('proveedors'))
            ->with('i', (request()->input('page', 1) - 1) * $proveedors->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $proveedor = new Proveedor();
       return view('proveedor.create', compact('proveedor'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Proveedor::$rules);

        $proveedor = Proveedor::create($request->all());

        return redirect()->route('proveedor.index')
            ->with('success', 'Proveedor created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $proveedor = Proveedor::find($id);

        return view('proveedor.show', compact('proveedor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $proveedor = Proveedor::find($id);

        return view('proveedor.edit', compact('proveedor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Proveedor $proveedor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Proveedor $proveedor,$id)
    {
        $proveedor = Proveedor::find($id);
        $proveedor->Nombre        = $request->input('Nombre');
        $proveedor->NombreCve     = $request->input('NombreCve');
        $proveedor->Email         = $request->input('Email');
        $proveedor->Celular       = $request->input('Celular');
        $proveedor->WhatsApp      = $request->input('WhatsApp');
        $proveedor->Banco         = $request->input('Banco');
        $proveedor->NumTarjeta    = $request->input('NumTarjeta');
        $proveedor->Created_by  = $request->input('Created_by');
        request()->validate(Proveedor::$rules);
        $proveedor->update();

        return redirect()->route('proveedor.index')
            ->with('success', 'Datos del Proveedor actualizados con exito');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $proveedor = Proveedor::find($id)->delete();

        return redirect()->route('proveedor.index')
            ->with('success', 'Proveedor deleted successfully');
    }
}
