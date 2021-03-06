<?php

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
Route::get('/', 'TiendaController@index');

//PRODUCTOS
Route::get('administrador/productos', 'Productos@getProductos');

Route::post('productos/addProductos', 'Productos@addProductos');

Route::post('productos/deleteProd', 'Productos@deleteProd');

//FIN PRODUCTOS

//CATEGORIAS
Route::post('categorias/addCategoria', 'CategoriasController@addCategoria');

Route::post('categorias/deleteCat', 'CategoriasController@deleteCat');

Route::get('administrador/categorias', 'CategoriasController@index');

Route::post('categorias/editCat', "CategoriasController@editCat");

//FIN CATEGORIAS

//LOGIN
Route::get('login', "LoginAdminController@index");
Route::post('login/login', "LoginAdminController@login");
Route::post('login/registrar', "LoginAdminController@registrar");
Route::get('login/cerrar', "LoginAdminController@logout");

//FIN LOGIN
Route::get('productos', "Productos@tiendaProductosByCat");
Route::get('productosdetalles', "Productos@tiendaProductosById");
Route::post('productos/busqueda', "Productos@buscador");
Route::post('comentarios/comentar', "ComentariosController@addComent");
Route::post('comentarios/aceptarComentario', "ComentariosController@aceptarComentario");
Route::post('comentarios/deleteComentario', "ComentariosController@deleteComentario");
Route::get('administrador/comentarios', "ComentariosController@getValidar");



//REPORTES
Route::get('administrador', "UsuariosController@reportes");
Route::get('administrador/favoritos', "UsuariosController@favoritos");
Route::post('administrador/deleteFav', "UsuariosController@deleteFav");
//CLIENTES
Route::get('administrador/clientes', "UsuariosController@index");
Route::get('administrador/perfil', "UsuariosController@index");
Route::post('clientes/deleteCliente', "UsuariosController@deleteClie");
Route::post('clientes/addCliente', "UsuariosController@addCliente");
Route::get('clientes/perfil', "UsuariosController@perfil");

//CARRITO
Route::post('carrito/getCarrito', "CarritoController@getCarrito");
Route::post('carrito/addProdCarrito', "CarritoController@addCarrito");
Route::post('carrito/addFavorito', "CarritoController@addFavorito");
Route::get('carrito/verCarrito', "CarritoController@verCarrito");
Route::get('carrito/deletePro', "CarritoController@deletePro");
Route::get('clientes/perfil', "UsuariosController@perfil");
Route::post('pagos/pagar', "PagosController@pagar");

Route::get('storage/productos/{filename}', function ($filename)
{
    $path = storage_path('app/productos/' . $filename);

    if (!File::exists($path)) {
        return $path;
        return "hola";
        abort(404);
        
    }

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);

    return $response;
});

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
