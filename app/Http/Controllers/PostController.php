<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;


class PostController extends Controller
{
    public function createNewPost(Request $req){


        $reqData = [
            'Description' => $req->input("Description"),
            'Image' => $req->input("Image"),
            'DateHeure' => $req->input("DateHeure"),
        ];

        $newPost = Post::create($reqData);

        return response($newPost);
    }

    public function showAllposts(){

        $posts = Post::all();
        $postsArray = [];

        foreach ($posts as $postKey => $postValue) {
            $postsArray[] = [
                'Id' => $postValue->id,
                'Description' => $postValue->Description,
                'Image' => $postValue->Image,
                'DateHeure' => $postValue->DateHeure
                      ];
        }

        return response($postsArray, $status=200);
    }

    public function destroyElement($id_post){

        $post = Post::find($id_post);
        if(!$post){
            return response("Element NOT FOUND", $status=404);
        }

        $post->delete();
        return response("Element deleted Successfully", $status=200);
    }
}
