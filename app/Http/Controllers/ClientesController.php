<?php

namespace App\Http\Controllers;
Use App\Clientes;
use Illuminate\Http\Request;
use DB;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $clientes=Clientes::all();
        return view('clientes.index')
        ->with('clientes',$clientes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data=$request->all();
        Clientes::create($data);
        return redirect(route("clientes"))->with('Agregado','Si');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $clientes=Clientes::find($id);
        return view('clientes.edit')
        ->with('clientes',$clientes);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $clie=Clientes::find($id);
         $clie->update($request->all());
         return redirect(route("clientes"))->with('Actualizado','Si');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
        public function destroy($id)
    {
        //
        $clientes=DB::select("SELECT * FROM facturas WHERE cli_id=$id");

        if(empty($clientes)){
$sms="Eliminado Correctamente";
Clientes::destroy($id);
        }else{

            $sms="No se puede eliminar ya que tiene una factura en uso";

        }
    
echo "<h1 style='background:red;color:white'>
$sms
<a href='".route('clientes')."'>Volver a categorias</a>

</h1>";


    }
}
