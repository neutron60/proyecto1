<?php


use App\Articulo;
use App\User;
use App\Role;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {



    return view('welcome');
});


/*Route::get('/contacto', function () {
    //return view('welcome');
    echo'voy por aqui'. "<br>";
    return "contactenos";
});

Route::get('/prueba/{id}/{nombre}', function ($id,$nombre) {
    //return view('welcome');
    return "este es el contacto numero   ". $id . "  realizado por  " . $nombre; //el valor de $id y de $nombre hay que pasarlo por la url escribiendolo
})->where('nombre','[a-z]+'); // se especifica que string puede recibir la variable nombre, en este caso solo letras minusculas, para mas informacion revisar expresiones regulares de php
*/


/*Route::get('/inicio/{id}/{nombre}', 'EjemploController@inicio'); // el formato es el siguiente, primero es el nombre de la ruta que se desea, seguido del nombre de la clase@el nombre del metodo o la funcion*/

//esta es una forma de crear las rutas manualmente
/*Route::get('/index', 'EmpresaController@inicio');

Route:: get("/leer",function(){

/*$articulos=Articulo::all();  //el metodo all permite que toda lainformacion de la base de datos se grabe en la variable articulos
foreach($articulos as $articulo){
    echo $articulo->departamento;
}

/*$articulos=Articulo::where("departamento","electronica")->get();
return $articulos;

$articulos=Articulo::where("marca","asrock")->get(); //guarda en articulos todos los elementos de marca asrock
echo "<br>";
$articulos=Articulo::where("departamento","electronica")->take(2)->get(); //guarda en articulos solo dos elementos del departamento electronica
$articulos=Articulo::where("departamento","electronica")->orderBy("id","desc")->get(); //guarda en articulos solo dos elementos de id ordenado de forma descendente
return $articulos;


});*/


/*Route::get('/index', 'EmpresaController@index');
Route::get('/crear', 'EmpresaController@create');
Route::get('/navegar', 'EmpresaController@navegar');
Route::get('/inicio', 'EmpresaController@index');*/


Route::resource('/layouts', 'EmpresaController');  //carpeta donde estan los crud
/*Route::get('/crear', 'EmpresaController@create');*/
/*Route::get('/actualizar', 'EmpresaController@update');*/
/*Route::get('/insertar', 'EmpresaController@store');
/*Route::get('/borrar', 'EmpresaController@destroy');*/



/*Route::get('/departamentos', 'PaginaController@departamentos');
Route::get('/ofertas', 'PaginaController@ofertas');
Route::get('/contactanos', 'PaginaController@contactanos');
*/

/* para hacerlo automatico es de la siguiente manera
Route::resource("posts","EjemploautrController");
*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'AdministradorController@index');

