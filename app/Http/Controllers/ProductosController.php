<?php

namespace App\Http\Controllers;
use Auth;
use DB;
use App\Productos;
use App\Categorias;
use App\Provedor;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        //$data=$request->all();

        $desde=date('Y-m-d');
        $hasta=date('Y-m-d');

           if (isset($data['desde'])) {
                $desde=$data['desde'];
                $hasta=$data['hasta'];
            }
        
        //
        //$movimientos=Movimientos::all();//Eloquent
        $productos=DB::select(" 
            SELECT * FROM productos p
                JOIN categorias c ON p.cat_id=c.cat_id 
              JOIN provedor r ON p.prov_id=r.prov_id
            WHERE p.prod_fecha BETWEEN '$desde' AND '$hasta'
       
            ");  




        // if (isset($data['btn_pdf'])) {
        //     $data=['movimientos'=>$movimientos];
        //     $pdf = PDF::loadView('movimientos.reporte', $data);
        //     return $pdf->stream('reporte.pdf');
        // }




        return view('productos.index')
        ->with('productos',$productos)
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
    }
}
