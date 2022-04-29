<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use DB;
use App\Productos;
use App\Categorias;
use App\Provedor;


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

           // if (isset($data['desde'])) {
           //      $desde=$data['desde'];
           //      $hasta=$data['hasta'];
           //  }
        
        //
        //$movimientos=Movimientos::all();//Eloquent
        $productos=DB::select(" 
            SELECT * FROM productos p
                JOIN categorias c ON p.cat_id=c.cat_id 
              JOIN provedor r ON p.prov_id=r.prov_id
            -- WHERE p.prod_fecha BETWEEN '$desde' AND '$hasta'
       
            ");  




        // if (isset($data['btn_pdf'])) {
        //     $data=['movimientos'=>$movimientos];
        //     $pdf = PDF::loadView('movimientos.reporte', $data);
        //     return $pdf->stream('reporte.pdf');
        // }




        return view('productos.index')
        ->with('productos',$productos);
        // ->with('desde',$desde)
        // ->with('hasta',$hasta);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categorias=Categorias::all();
        $provedor=Provedor::all();
        
// dd("EDITAR");

        return view('productos.create')
        ->with('categorias',$categorias)
        ->with('provedor',$provedor);
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
         Productos::create($data);
        return redirect(route("productos"));
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
        $productos=Productos::find($id);
        $categorias=Categorias::all();
        $provedor=Provedor::all();
        return view('productos.edit')
        ->with('productos',$productos)
        ->with('categorias',$categorias)
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
        $p=Productos::find($id);
        $p->update($request->all());
        return redirect(route("productos"));
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
        Productos::destroy($id);
        return redirect(route("productos"));
    }
}
