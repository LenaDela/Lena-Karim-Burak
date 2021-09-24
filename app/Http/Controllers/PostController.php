<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    // index, c'est pour afficher tous les elements presents dans la table (dans une vue)
    {
        // tout ce qu'il y a dans la table, on le met dans une variable $posts (lire de droite a gauche)
        $posts = Post::all();
        // appelle posts.blade.php, mais on ecrit juste "posts"
        return view("posts", ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        //afficher formulaire (creer un fichier dans view "addPost.blade.php")
        return view("addPost");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(Request $request)
    {
        // envoyer les donnees recuperees dans le formulaire vers la bdd
        // $request, variable qui contient toutes les donnees du formulaire
        Post::create([
            // $request->title envoie la donnee entree dans title(formulaire) vers la bdd
            'title' => $request->title,
            // $request->body envoie la donnee entree dans body(formulaire) vers la bdd
            'body' => $request->body,
        ]
        );

        // $p = new Post();
        // $p->title = $request->title;
        // $p->body = $request->body;
        // $p->save();

        return redirect('posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     */
    public function show($id)
    {
       $post = Post::find($id);
       return view("readPost", ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
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
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     */
    public function destroy($id)
    {
        //
    }
}
