<?php

namespace App\Http\Controllers;
Use App\Categorias;
use Illuminate\Http\Request;
use DB;

class CategoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

                    $categorias=Categorias::all();
                       return view('categorias.index')
                       ->with('categorias',$categorias);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categorias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=$request->all();
        Categorias::create($data);
        return redirect(route("categorias"))->with('Agregado','Si');
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
        $categoria=Categorias::find($id);
        return view('categorias.edit')
        ->with('categoria',$categoria);


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

         $c=Categorias::find($id);
         $c->update($request->all());
         return redirect(route("categorias"))->with('Actualizado','Si');


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
        $productos=DB::select("SELECT * FROM productos WHERE cat_id=$id");

        if(empty($productos)){
$sms="Eliminado Correctamente";
Categorias::destroy($id);
        }else{

            $sms="No se puede eliminar ya que tiene productos en uso";

        }
    
echo "<h1 style='background:red;color:white'>
$sms
<a href='".route('categorias')."'>Volver a categorias</a>

</h1>";


    }
}
