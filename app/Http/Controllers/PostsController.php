<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Post;



class PostsController extends Controller
{
    public function __invoke(){
        return 'hola';
    }

    // public function show($post){

    //         $posts = [
    //             'my-first-post' => 'Hoola, este es el primer post',
    //             'my-second-post' => 'Este es el segundo post'
    //         ];

    //         if(!array_key_exists($post, $posts)) abort(404, 'No definido');

    //          return view('post',[
    //              'post' => $posts[$post]
    //         ]);

    // }



    // public function show($slug){
    //     $post = \DB::table('posts')->where('slug', $slug)->first();

    //     dd($post);

    //     if(!array_key_exists($post, $posts)) abort(404, 'No definido');

    //     return view('post',[
    //         'post' => $posts[$post]
    //     ]);
    // }

    
    
    //Fetching first result from mySQL
    // public function show($slug){
    //     $post = \DB::table('posts')->where('slug', $slug)->first();

    //     return view('post',[
    //         'post' => $post
    //     ]);
    // }

    
    //Using Model to acces database
    // public function show($slug){
        
    //     $post = Post::where('slug', $slug)->first();

    //     if (!$post) abort(404);

    //     return view('post',[
    //         'post' => $post
    //     ]);
    // }

    
    //Using firstOrFail method instead abort
    // public function show($slug){
        
    //     $post = Post::where('slug', $slug)->firstOrFail();

    //     return view('post',[
    //         'post' => $post
    //     ]);
    // }

    public function show($slug){

        return view('post',[
            'post' => Post::where('slug', $slug)->firstOrFail()
        ]);
    }

}
