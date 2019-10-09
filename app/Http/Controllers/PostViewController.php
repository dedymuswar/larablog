<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use DB;

class PostViewController extends Controller
{
    public function CounterView()
    {
        $posts = Post::join("post_views", "post_views.post_id", "=", "posts.id")
            ->where("post_views.created_at", ">=", date("Y-m-d H:i:s", strtotime('-24 hours', time())))
            ->groupBy("posts.id")
            ->orderBy(DB::raw('COUNT(posts.id)'), 'desc')
            ->get([DB::raw('COUNT(posts.id) as total_views'), 'posts.*']);
    }
}
