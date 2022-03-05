<?php

namespace App\Http\Controllers;

use App\Models\Franquicitario;
use App\Models\User;
use App\Models\Franquicia;
use App\Models\Sucursal;
use Illuminate\Http\Request;

/**
 * Class FranquicitarioController
 * @package App\Http\Controllers
 */
class FranquicitarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $franquicitarios = Franquicitario::paginate();
        $sucursal   = Sucursal::  pluck('Nombre','id');
        $user       = User::      pluck('name','id');
        $franquicia = Franquicia::pluck('Nombre','id');

        return view('Franquicitario.index', compact('franquicitarios','sucursal','user','franquicia'))
            ->with('i', (request()->input('page', 1) - 1) * $franquicitarios->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sucursal   = Sucursal::  pluck('Nombre','id');
        $franquicia = Franquicia::pluck('Nombre','id');
        $user       = User::      pluck('name','id');
        $franquicitario = new Franquicitario();
        return view('franquicitario.create', compact('franquicitario','sucursal','franquicia','user'));
    }
    
     /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
   
     public function getFranquiciasByIdSucursal(Request $request){
        $id=$request['id'];
        $franquicia = Franquicia::select("*")
                            ->where("idSucursal", "=", $id)
                            ->get();
        return response()->json($franquicia);
    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */ 
    public function store(Request $request)
    {
        request()->validate(Franquicitario::$rules);
        /* Checamos que la utilidad de la franquicia no sea mayor a 100 */
        $idFranquicia        = $request->input('idFranquicia');
        $Utilidad            = $request->input('Utilidad');
        $Yuser               = $request->input('idUser');
       
        $sum = Franquicitario::select("Utilidad")
        ->where("idFranquicia", "=", $idFranquicia)
        ->get()->sum("Utilidad");
        
        if (($sum+$Utilidad)>100){
            return redirect()->route('Franquicitarios.index')
            ->with('error', "ERROR: NO SE PUEDE ASIGNAR EL PORCENTAJE. REBASA EL 100%.");
        }
        
         /* Checamos que el pendejo usuario no este repetido en la franquicia */
         $chkuser = Franquicitario::select("idUser") 
         ->where("idFranquicia", "=", $idFranquicia)
         ->get()
         ->toArray();
       

        foreach ($chkuser as $usuario){
            if ($usuario['idUser']==$Yuser){
                 return redirect()->route('Franquicitarios.index')
                ->with('error', "ERROR: USUARIO FUE ASIGNADO CON ANTERIORIDAD, SELECCIONE OTRO.");
            }
        }
        
        $franquicitario = Franquicitario::create($request->all());
        return redirect()->route('Franquicitarios.index')
            ->with('success', 'Franquicitario asignado a franquicia.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $franquicitario = Franquicitario::find($id);

        return view('franquicitario.show', compact('franquicitario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $franquicitario = Franquicitario::find($id);
        $sucursal   = Sucursal::  pluck('Nombre','id');
        $franquicia = Franquicia::pluck('Nombre','id');
        $user       = User::      pluck('name','id');

        return view('franquicitario.edit', compact('franquicitario','sucursal','franquicia','user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Franquicitario $franquicitario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Franquicitario $franquicitario,$id)
    {
        
       /* Checamos que la utilidad de la franquicia no sea mayor a 100 */
       $idFranquicia        = $request->input('idFranquicia');
       $Utilidad            = $request->input('Utilidad');
       $Yuser               = $request->input('idUser');
      
       $sum = Franquicitario::select("Utilidad")
       ->where("idFranquicia", "=", $idFranquicia)
       ->get()->sum("Utilidad");
       
       if (($sum+$Utilidad)>100){
           return redirect()->route('Franquicitarios.index')
           ->with('error', "ERROR: NO SE PUEDE ASIGNAR EL PORCENTAJE. REBASA EL 100%.");
       }
       
        /* Checamos que el pendejo usuario no este repetido en la franquicia */
        $chkuser = Franquicitario::select("idUser") 
        ->where("idFranquicia", "=", $idFranquicia)
        ->get()
        ->toArray();
      

       foreach ($chkuser as $usuario){
         echo "for";  print_r($usuario);
           if ($usuario['idUser']==$Yuser){
                return redirect()->route('Franquicitarios.index')
               ->with('error', "ERROR: USUARIO FUE ASIGNADO CON ANTERIORIDAD, SELECCIONE OTRO.");
           }
       }
       
       
        // request()->validate(Franquicitario::$rules);
        $franquicitario = Franquicitario::find($id);
        $franquicitario->idSucursal           = $request->input('idSucursal');
        $franquicitario->idFranquicia         = $request->input('idFranquicia');
        $franquicitario->idUser               = $request->input('idUser');
        $franquicitario->Utilidad             = $request->input('Utilidad');
        $franquicitario->update();
        return redirect()->route('Franquicitarios.index')
            ->with('success', 'Datos actualizados');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $franquicitario = Franquicitario::find($id)->delete();

        return redirect()->route('Franquicitarios.index')
            ->with('success', 'Franquiciatario eliminado de Franquicia');
    }
}
