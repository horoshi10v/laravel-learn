<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        dump('not published');
        $post = Post::where('is_published', 0)->first();
        dump($post->title);
        dump('all posts');
        $posts = Post::all();
        foreach ($posts as $post) {
            dump($post->title);
        }
        dd($posts);
    }

    public function create()
    {
        $postArr = [
            [
                'title' => 'demo4',
                'content' => 'content4',
                'image' => 'imgm4.jpg',
                'likes' => '10',
                'is_published' => 1,
            ],
            [
                'title' => 'demo5',
                'content' => 'content5',
                'image' => 'imgm5.jpg',
                'likes' => '25',
                'is_published' => 1,
            ]
        ];

        foreach ($postArr as $post){
            Post::create($post);
        }
        $posts = Post::all();
        dd($posts);
    }

    public function update()
    {
        $post = Post::find(2);

        $post->update([
            'title' => 'updated',
            'content' => 'updated',
            'image' => 'updated',
            'likes' => 1000,
            'is_published' => 1,
        ]);

        dd($post);
    }

    public function delete()
    {
        $post = Post::withTrashed()->find(2);
        $post->delete();
        //$post->restore();
        dd('deleted');
    }

}
