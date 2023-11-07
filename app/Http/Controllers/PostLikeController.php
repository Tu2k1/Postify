<?php

namespace App\Http\Controllers;

use App\Models\Post;


class PostLikeController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function store(Post $post){

        if($post->likedBy(auth()->user())){
            return back();
        }

        $post->likes()->create([
            'user_id' => auth()->id()
        ]);

        return back();
    }

    public function destroy(Post $post){
        auth()->user()->likes()->where('post_id', $post->id)->delete();

        return back();
    }
}
