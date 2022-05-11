<?php

namespace App\Http\Controllers;
use DB;
use App\Facturas;
use App\Clientes;
use App\Detalle;
use App\Productos;
use Illuminate\Http\Request;

class FacturasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $facturas=Facturas::all();
        $clientes=clientes::all();

        return view('facturas.index')
        ->with('facturas',$facturas)       
         ;

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $productos=DB::select(" SELECT * from productos");
        $clientes=clientes::all();
        return view('facturas.create')
        ->with('clientes',$clientes)
        ->with('productos',$productos);

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
        $facturas=Facturas::create($data);
        return redirect(route('facturas.edit',$facturas->fac_id));
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
        $facturas=Facturas::find($id);
        $productos=Productos::all();
        $clientes=Clientes::all();
        $detalle=DB::select("
            SELECT * FROM factura_detalle fd 
            JOIN productos p 
            ON fd.prod_id=p.prod_id
            WHERE fd.fac_id=$id 
            ");
        return view('facturas.edit')
            ->with('facturas',$facturas)
            ->with('productos',$productos)
            ->with('detalle',$detalle)
            ->with('clientes',$clientes);
            // ;

    }


    public function update(Request $request, $id)
    {
        $fac=facturas::find($id);
        $fac->update($request->all());
        return redirect(route('facturas.update'));

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
    }


    public function detalle(Request $req){
        //
        $datos=$req->all();
        $datos['fad_vt']=0;
        $fac_id=$datos['fac_id'];
        Detalle::create($datos);
         return redirect(route('facturas.edit',$fac_id));
    
    }
}
