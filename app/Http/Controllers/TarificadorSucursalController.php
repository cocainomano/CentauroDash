<?php

namespace App\Http\Controllers;

use App\Models\TarificadorSucursal;
use App\Models\Portafolio;
use App\Models\Sucursal;
use Illuminate\Http\Request;

/**
 * Class TarificadorSucursalController
 * @package App\Http\Controllers
 */
class TarificadorSucursalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tarificadorSucursals = TarificadorSucursal::paginate();
        $sucursal   = Sucursal::        pluck('Nombre','id');
        $portafolio = Portafolio::      pluck('NombreProducto','id');
        $ventaCentauro = Portafolio::   pluck('Venta_Centauro','id');
        return view('tarificador-sucursal.index', compact('tarificadorSucursals','portafolio','sucursal','ventaCentauro'))
            ->with('i', (request()->input('page', 1) - 1) * $tarificadorSucursals->perPage());
    }
   
    public function getTarifaCentauro(Request $request){
            $id=$request['id'];
            $Portafolios = Portafolio::select('Utilidad_Centauro')
                                ->where("id", "=", $id)
                                ->get();
            return response()->json($Portafolios);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tarificadorSucursal = new TarificadorSucursal();
        $sucursal   = Sucursal::        pluck('Nombre','id');
        $portafolio = Portafolio::      pluck('NombreProducto','id');
        return view('tarificador-sucursal.create', compact('tarificadorSucursal','portafolio','sucursal'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(TarificadorSucursal::$rules);

         /* Checamos que el pendejo portafolio no este repetido en la sucursal */
         $chkPortafolio = TarificadorSucursal::select("idPortafolio","idSucursal") 
         ->where("idPortafolio", "=", $request->input('idPortafolio'))
         ->where("idSucursal", "=",   $request->input('idSucursal') )
         ->get()
         ->toArray();
         
            foreach ($chkPortafolio as $Porta){
                if ($Porta['idPortafolio']==$request->input('idPortafolio') && $Porta['idSucursal']== $request->input('idSucursal')){
                    return redirect()->route('TarificadorSucursal.index')
                    ->with('error', "ERROR: ESTE PORTAFOLIO FUE ASIGNADO CON ANTERIORIDAD. ELIJA OTRO POR FAVOR.");
                }
            }
        
        
        $tarificadorSucursal = TarificadorSucursal::create($request->all());



        return redirect()->route('TarificadorSucursal.index')
            ->with('success', 'Tarifa creada para Sucursal.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tarificadorSucursal = TarificadorSucursal::find($id);

        return view('tarificador-sucursal.show', compact('tarificadorSucursal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tarificadorSucursal = TarificadorSucursal::find($id);
        $sucursal   = Sucursal::        pluck('Nombre','id');
        $portafolio = Portafolio::      pluck('NombreProducto','id');

        return view('tarificador-sucursal.edit', compact('tarificadorSucursal','portafolio','sucursal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  TarificadorSucursal $tarificadorSucursal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TarificadorSucursal $tarificadorSucursal, $id)
    {
       // request()->validate(TarificadorSucursal::$rules);
        $tarificadorSucursal = TarificadorSucursal::find($id);
        $tarificadorSucursal->idPortafolio  = $request->input('idPortafolio');
        $tarificadorSucursal->idSucursal    = $request->input('idSucursal');
        $tarificadorSucursal->CostoCentauro = $request->input('CostoCentauro');
        $tarificadorSucursal->PrecioVentaFranquicia = $request->input('PrecioVentaFranquicia');
        $tarificadorSucursal->UtilidadSucursal = $request->input('UtilidadSucursal');
        $tarificadorSucursal->Created_by = $request->input('Created_by');
        
        /* Checamos que el pendejo portafolio no este repetido en la sucursal */
         $chkPortafolio = TarificadorSucursal::select("idPortafolio","idSucursal") 
         ->where("idPortafolio", "=", $tarificadorSucursal->idPortafolio)
         ->where("idSucursal", "=", $tarificadorSucursal->idSucursal )
         ->get()
         ->toArray();
         
         if (count($chkPortafolio)>1){
            foreach ($chkPortafolio as $Porta){
                if ($Porta['idPortafolio']==$tarificadorSucursal->idPortafolio && $Porta['idSucursal']==$tarificadorSucursal->idSucursal){
                    return redirect()->route('TarificadorSucursal.index')
                    ->with('error', "ERROR: ESTE PORTAFOLIO FUE ASIGNADO CON ANTERIORIDAD. ELIJA OTRO POR FAVOR.");
                }
            }
        }
        $tarificadorSucursal->update();

        return redirect()->route('TarificadorSucursal.index')
            ->with('success', 'Tarifa actualizada con exito');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tarificadorSucursal = TarificadorSucursal::find($id)->delete();

        return redirect()->route('TarificadorSucursal.index')
            ->with('success', 'Tarifa eliminada con exito');
    }
}
