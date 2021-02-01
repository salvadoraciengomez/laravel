<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;


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

//NOTA1
//Default route
// Route::get('/', function () {
//     return view('welcome');
// });

//NOTA2
//Devuelve el json del array
//Route::get('/', function () {
//    return ['myKey' => 'myValue'];
//});


//NOTA3
//Llama al resources/views/test.blade.php
// Route::get('test', function(){
//     return view('test');
// });

//NOTA4
//Muestra la variable recogida en la request GET http://localhost:8080/?variable=hola
// Route::get('/', function(){
//     $getVar=request('variable');
//     return $getVar;
// });

//NOTA5
//Route::get('/', function () {
//    $variable = request('variable');
//    return view('test',[
//        'variable' => $variable
        //segundo parámetro del view() es un array al que se le pasa en la clave el nombre que la vista cargará desde dicha variable local 
        //hacia la nueva variable que la vista (valor de la clave) cargará entre la etiqueta <?= $variable
        //Para enviar el valor hacia la vista, sin el array, solamente haría falta usar <?= {{ $variable }}
        //Inyección JS desde GET http://localhost:8080/?variable=<script>alert("does")</script>
//    ]);
//});



//./storage/framework/views contiene la vista compilada



//NOTA6 Uso de POST

// Route::get('/posts/{post}', function($post){
    
//     $posts=[
//         'my-first-post' => 'This is the first post',
//         'my-second-post' => 'This is the second post'
//     ];

        //if(! array_key_exists($post, $posts)) abort(404, 'Sorry don't exist);   pero se puede usar ?? '404 error' como valor por defecto del array

//     return view('post', [
//         'post' => $posts[$post] ?? 'This is the default value for the unknown key'       //Devuelve desde https://localhost/posts/my-first-post
//     ]);
// });


//Nota7 Uso de controlador
//Route::get('/posts/{post}', PostsController::class); //Se debe crear el método __invoke() a modo de constructor el el app/Http/Controllers/CLASSController
Route::get('/posts/{post}', [PostsController::class, 'show']);


