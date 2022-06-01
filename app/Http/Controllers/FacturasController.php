<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Facturas;
use App\Detalle;
use App\Clientes;
use DB;
use PDF;
use Auth;

class FacturasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //

        $data=$request->all();

        $desde=date('Y-m-d');
        $hasta=date('Y-m-d');

           if (isset($data['desde'])) {
                $desde=$data['desde'];
                $hasta=$data['hasta'];
            }



         $facturas=DB::select("
SELECT f.fac_no,
f.fac_id,
f.cli_id,
f.fac_fecha,
f.fac_descuento, 
f.fac_iva, 
f.fac_observaciones, 
f.fac_estado,
SUM(fd.fad_vt) AS total, 
c.*
FROM facturas f 
JOIN clientes c ON f.cli_id=c.cli_id
JOIN factura_detalle fd ON f.fac_id=fd.fac_id
GROUP BY f.fac_id,f.fac_no,f.cli_id,f.fac_fecha,f.fac_descuento,f.fac_iva,f.fac_observaciones,f.fac_estado");  







 $facturas=DB::select("
SELECT * FROM factura_detalle f 
                JOIN productos p ON f.prod_id=p.prod_id");




        $facturas=DB::select(" 
            SELECT * FROM facturas f 
                JOIN clientes c ON f.cli_id=c.cli_id
             
              JOIN factura_detalle fd ON f.fac_id=fd.fac_id
            WHERE f.fac_fecha BETWEEN '$desde' AND '$hasta'
       
            ");  




        if (isset($data['btn_pdf'])) {
            $data=['facturas'=>$facturas];
            $pdf = PDF::loadView('facturas.reporte', $data);
            return $pdf->stream('reporte.pdf');
        }

        return view('facturas.index')
        ->with('facturas',$facturas)
        ->with('desde',$desde)
        ->with('hasta',$hasta);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $clientes=DB::select("SELECT * from clientes");
        $productos=DB::select("SELECT * from productos");
        return view('facturas.create')
        ->with('clientes',$clientes)
        ->with('productos',$productos)
        ;
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
        $facturas=Facturas::find($id);
        $clientes=DB::select("SELECT * from clientes");
        $productos=DB::select("SELECT * from productos");
        $detalle=DB::select("SELECT * FROM factura_detalle fd 
                             JOIN productos p ON fd.prod_id=p.prod_id  
                             WHERE fd.fac_id=$id");
        return view('facturas.edit')
        ->with('facturas',$facturas)
        ->with('clientes',$clientes)
        ->with('productos',$productos)
        ->with('detalle',$detalle)
        ;
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
         Facturas::destroy($id);
        return redirect(route("facturas"));
    }

    public function detalle(Request $req){

         $datos=$req->all();
         $fac_id=$datos['fac_id'];
         
         if(isset($datos['btn_detalle'])=='btn_detalle'){
                ///GUARDO EL DETALLE 
           Detalle::create($datos);
         }

         if(isset($datos['btn_eliminar'])>0){
                ///ELIMINO EL DETALLE    
                $fad_id=$datos['btn_eliminar'];
                Detalle::destroy($fad_id);    

         }
         
       return redirect(route('facturas.edit',$fac_id));
    }

    public function facturas_pdf($fac_id){
        
        $facturas=DB::select("
            SELECT * FROM facturas f
            JOIN clientes c ON c.cli_id=f.cli_id
            WHERE f.fac_id=$fac_id ");

        $detalles=DB::select("SELECT * FROM factura_detalle d 
                   JOIN productos p ON p.prod_id=d.prod_id
                   WHERE d.fac_id=$fac_id 
            ");

        $pdf = PDF::loadView('facturas.pdf',[ 'facturas'=>$facturas[0],'detalles'=>$detalles ]);
        $pdf->setPaper('a5'); 
        return $pdf->stream('facturas.pdf');




    }

    public function facturas_anular($fac_id){
    	DB::select("UPDATE facturas SET  fac_estado=2 WHERE  fac_id=$fac_id");
    	return redirect(route('facturas.index'));
    } 



     public function facturas_desanular($fac_id){
        DB::select("UPDATE facturas SET  fac_estado=1 WHERE  fac_id=$fac_id");
        return redirect(route('facturas.index'));
    }


}



