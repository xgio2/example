<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class PostsController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function index() {
        $posts= Post::where('is_published', 1)->get();
        return view('post.index', compact('posts'));
    }
    public function create() {
        return view('post.create');
    }
    public function store() {
        $data = request()->validate([
            'title' => 'string',
            'contents' => 'string',
            'image' => 'string',
        ]);
        Post::create($data);
        return redirect()->route('post.index');
    }
    public function show(Post $post){
        return view('post.show', compact('post'));
    }
    public function edit(Post $post){
        return view('post.edit', compact('post'));

    }
    public function update(Post $post) {
        $data = request()->validate([
            'title' => 'string',
            'contents' => 'string',
            'image' => 'string',
        ]);
        $post->update($data);
        return redirect()->route('post.show', $post->id);
    }
    public function destroy(Post $post){
        $post->delete();
        return redirect()->route('post.index');

    }






    public function delete() {
        $post = Post::find(1);
        $post->delete();
        dd('delete post');
    }







    public function andelete() {
        $post = Post::withTrashed()->find(1);
        $post->restore();
        dd('restore post');
    }
    public function FirstOrCreate() {


       $post = Post::FirstOrCreate([
            'title' => "PostFirstOrCreate",
        ],
            [
                'title' => "PostFirstOrCreate",
                'image' => "ImageFirstOrCreate",
                'contents' => "ConetntFirstOrCreate",
                'likes' => 33,
                'is_published' => 1,
            ]);
        dump($post->contents);
        dd($post->title);
    }
    public function UpdateOrCreate() {
        $anotherpost = [
            'title' => "redacted",
            'image' => "redacted",
            'contents' => "redacted",
            'likes' => 666,
            'is_published' => 1,
        ];
        $post = Post::UpdateOrCreate(['title' => "PostN10"],$anotherpost);
        dump($post->contents);
        dd($post->title);
    }
}
