<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Provedor;
use DB;
use App\Productos;

class ProvedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
                //
        $provedor=Provedor::all();
        $productos=Productos::all();
        return view('provedor.index')
        ->with('provedor',$provedor)
        ->with('productos',$productos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
                return view('provedor.create');

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
        Provedor::create($data);
        return redirect(route("provedor"))->with('Agregado','Si');        
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
        $provedor=Provedor::find($id);
        return view('provedor.edit')
        ->with('provedor',$provedor);

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
        $prov=Provedor::find($id);
         $prov->update($request->all());
         return redirect(route("provedor"))->with('Actualizado','Si');
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
        $productos=DB::select("SELECT * FROM productos WHERE prov_id=$id");

        if(empty($productos)){
$sms="Eliminado Correctamente";
Provedor::destroy($id);
        }else{

            $sms="No se puede eliminar ya que tiene productos en uso";

        }
    
echo "<h1 style='background:red;color:white'>
$sms
<a href='".route('provedor')."'>Volver a clientes</a>

</h1>";


    }







}
