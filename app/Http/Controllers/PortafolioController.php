<?php

namespace App\Http\Controllers;

use App\Models\Portafolio;
use App\Models\Proveedor;
use Illuminate\Http\Request;

/**
 * A ber que pedo
 * Class PortafolioController
 * @package App\Http\Controllers
 */
class PortafolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portafolios = Portafolio::paginate();
        $proveedor   = Proveedor::pluck('NombreCve','id');

        return view('portafolio.index', compact('portafolios','proveedor'))
            ->with('i', (request()->input('page', 1) - 1) * $portafolios->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $portafolio = new Portafolio();
        $proveedor = Proveedor::pluck('NombreCve','id');
        return view('portafolio.create', compact('portafolio','proveedor'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Portafolio::$rules);

        $portafolio = Portafolio::create($request->all());

        return redirect()->route('Portafolios.index')
            ->with('success', 'Portafolio created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $portafolio = Portafolio::find($id);
        $proveedor  = Proveedor::pluck('NombreCve','id');
        return view('portafolio.show', compact('portafolio','proveedor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $portafolio = Portafolio::find($id);
        $proveedor  = Proveedor::pluck('NombreCve','id');
        return view('portafolio.edit', compact('portafolio','proveedor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Portafolio $portafolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portafolio $portafolio,$id)
    {
       // request()->validate(Portafolio::$rules);
        
       $portafolio = Portafolio::find($id);
       $portafolio->idProveedor            = $request->input('idProveedor');
       $portafolio->NombreProducto         = $request->input('NombreProducto');
       $portafolio->NombreCve              = $request->input('NombreCve');
       $portafolio->Descripcion            = $request->input('Descripcion');
       $portafolio->Condiciones            = $request->input('Condiciones');
       $portafolio->Costo_Proveedor        = $request->input('Costo_Proveedor');
       $portafolio->Venta_Centauro         = $request->input('Venta_Centauro');
       $portafolio->Utilidad_Centauro      = $request->input('Utilidad_Centauro');
       $portafolio->update();
        return redirect()->route('Portafolios.index')
            ->with('success', 'Producto actualizado');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $portafolio = Portafolio::find($id)->delete();

        return redirect()->route('Portafolios.index')
            ->with('success', 'Produto eliminado del portafolio');
    }
}
