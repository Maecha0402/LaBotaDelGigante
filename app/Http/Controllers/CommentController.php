<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $comments = Comment::all();
    return view('comments.index', ['comments' => $comments]);
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         // Acceder a los datos de la solicitud
         $name = $request->input('name');
         $description = $request->input('description');
 
         // Crear un nuevo comentario
         $comment = new Comment();
         $comment->name = $name;
         $comment->description = $description;
         $comment->save();
 
         // Redirigir a la página de comentarios después de guardar
         return redirect()->route('comments.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
