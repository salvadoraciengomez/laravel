<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class PostsController extends Controller
{
    public function __invoke(){
        return 'hola';
    }

    public function show(){
        // Route::get('posts/{post}', function(array $post){
        //     $posts = [
        //         'my-first-post' => 'Hoola, este es el primer post',
        //         'my-second-post' => 'Este es el segundo post'
        //     ];

        //     if(!array_key_exists($post, $posts)) abort(404, 'No definido');

        //     return view('post',[
        //         'post' => $posts[$post]
        //     ]);
        // } );

        return $this->__invoke();
    }
}
