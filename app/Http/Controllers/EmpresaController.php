<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Articulo;        // se debe colocar el nombre del modelo


class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



    public function index()
    {
        $articulos=Articulo::all();
        return view("layouts.index", compact("articulos"));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("layouts.create");
       /* return view("productos.create");*/
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    /*
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function navegar()
    {
        return view('navegar');
        //
    }




    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)    //para almacenar en la base de datos
    {
        //

        /*$articulo=new Articulo;
        $articulo->departamento=$request->departamento;
        $articulo->seccion=$request->seccion;
        $articulo->codigo=$request->codigo;
        $articulo->articulo=$request->articulo;
        $articulo->marca=$request->marca;
        $articulo->modelo=$request->modelo;
        $articulo->descripcion=$request->descripcion;
        $articulo->status=$request->status;
        $articulo->save();*/

        $entrada=$request->all();

        if(isset($_FILES['imagen'] ['name'])){  //
            $nombreimagen=$_FILES['imagen'] ['name'];  //$_FILES[nombre del input de donde viene la imagen]
            $tipoimagen=$_FILES['imagen'] ['type'];
            $sizeimagen=$_FILES['imagen'] ['size'];  // el tamano lo da en bytes

            if($sizeimagen<=1000000){  // si la imagen es menor o igual a 1mb entonces puede subir la imagen
                if($tipoimagen=="image/jpeg" or $tipoimagen=="image/jpg" or $tipoimagen=="image/png" or $tipoimagen=="image/gif" ){ // solo permite subir archivos tipo imagen
                    if($archivo=$request->file('imagen')){
                        $nombreimagen=$archivo->getClientOriginalName();
                        $archivo->move('images',$nombreimagen);
                        $entrada['ruta_imagen']=$nombreimagen;

                    }
                    Articulo::create($entrada);
                    return redirect("/layouts");

                }
                else { echo'solo se pueden subir imagenes jpg jpeg png gif';}
            }
            else{ echo'el tamaño de la imagen excede el maximo permitido';}
                }





    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)  //busca un registro de la base de datos y lo muestra
    {
        /*$articulos=Articulo::find($id);*/
        $articulos=Articulo::findOrfail($id);
        return view("layouts.show", compact("articulos"));

        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)   //edita un articulo de la base de datos
    {
        //
        $articulos=Articulo::findOrfail($id);
        return view("layouts.edit", compact("articulos"));
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
        $articulos=Articulo::findOrfail($id);
        if(isset($_FILES['imagen'] ['name'])){
            $nombreimagen=$_FILES['imagen'] ['name'];  //$_FILES[nombre del input de donde viene la imagen]
            $tipoimagen=$_FILES['imagen'] ['type'];
            $sizeimagen=$_FILES['imagen'] ['size'];  // el tamano lo da en bytes

            if($sizeimagen<=1000000){  // si la imagen es menor o igual a 1mb entonces puede subir la imagen
                if($tipoimagen=="image/jpeg" or $tipoimagen=="image/jpg" or $tipoimagen=="image/png" or $tipoimagen=="image/gif" ){ // solo permite subir archivos tipo imagen
                    if($archivo=$request->file('imagen')){
                        $nombreimagen=$archivo->getClientOriginalName();
                        $archivo->move('images',$nombreimagen);
                        $articulos['ruta_imagen']=$nombreimagen;

                    }
                }
                else { echo'solo se pueden subir imagenes jpg jpeg png gif';}
            }
            else{ echo'el tamaño de la imagen excede el maximo permitido';}

            }
        $articulos->update($request->all());
        return redirect("/layouts");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $articulos=Articulo::findOrfail($id);
        $articulos->delete();
        return redirect("/layouts");
    }
}
