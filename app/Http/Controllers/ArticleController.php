<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Carbon\Carbon;
use App\Http\Requests;

class ArticleController extends Controller
{
    //
    public function index(){
        $posts = Post::where('published_at', '<=', Carbon::now())
                 -> orderBy('published_at', 'desc')
                 -> paginate(config('website.posts_per_page')); 

        return  view('articles.index', compact('posts'));
    }

    public function showPost($slug){
        $post = Post::whereSlug($slug) -> firstOrFail();
        return  view('articles.post') -> withPost($post);
    }
}
