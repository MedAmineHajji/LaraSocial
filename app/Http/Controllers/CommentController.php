<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($postId)
    {
        $post = Post::findOrFail($postId);
        return view('comments.create', compact('post'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   /* public function store(Request $request, $postId)
    {
        $request->validate([
            'body' => 'required|max:255', // Ajoutez les règles de validation nécessaires ici
        ]);

        Comment::create([
            'body' => $request->input('body'),
            'post_id' => $postId,
        ]);

        return redirect()->route('posts.show', $postId)->with('success', 'Commentaire créé avec succès.');
    }*/
    public function store(Request $request, $postId)
    {
        $request->validate([
            'body' => 'required|max:255', // Ajoutez les règles de validation nécessaires ici
        ]);

        Comment::create([
            'body' => $request->input('body'),
            'post_id' => $postId,
        ]);

        return redirect()->route('posts.show', $postId)->with('success', 'Commentaire créé avec succès.');
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($postId, $commentId)
    {
        $comment = Comment::findOrFail($commentId);
        $comment->delete();

        return redirect()->route('posts.show', $postId)->with('success', 'Commentaire supprimé avec succès.');
    }

}
