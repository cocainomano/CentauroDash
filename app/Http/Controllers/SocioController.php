<?php

namespace App\Http\Controllers;

use App\Models\Socio;
use App\Models\Sucursal;
use App\Models\User;
use Illuminate\Http\Request;

/**
 * Class SocioController
 * @package App\Http\Controllers
 */
class SocioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $socios   = Socio::paginate();
        $sucursal = Sucursal::pluck('Nombre','id');
        $user     = User::pluck('name','id');
        return view('socio.index', compact('socios','sucursal','user'))
            ->with('i', (request()->input('page', 1) - 1) * $socios->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $socio = new Socio();
        $sucursal   = Sucursal::pluck('Nombre','id');
        $user =User::pluck('name','id');
        return view('socio.create', compact('socio','sucursal','user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Socio::$rules);

        $socio = Socio::create($request->all());

        return redirect()->route('socios.index')
            ->with('success', 'Socio created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $socio = Socio::find($id);

        return view('socio.show', compact('socio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $socio = Socio::find($id);
        $sucursal   = Sucursal::pluck('Nombre','id');
        $user =User::pluck('name','id');
        return view('socio.edit', compact('socio','sucursal','user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Socio $socio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Socio $socio, $id)
    {
        $socio = Socio::find($id);
        $socio->idSucursal=        $request->input('idSucursal');
        $socio->idUser =           $request->input('idUser');
        $socio->Participacion =    $request->input('Participacion');
        $socio->update();
        return redirect()->route('Socios.index')
            ->with('success', 'Socio updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $socio = Socio::find($id)->delete();

        return redirect()->route('socios.index')
            ->with('success', 'Socio deleted successfully');
    }
}
