<?php

namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;

class PostView extends Model
{
    public static function createViewLog($posts)
    {
        // dd($posts->id);
        $postViews = new PostView();
        $postViews->post_id = $posts->id;
        $postViews->titleslug = $posts->slug;
        $postViews->url = \Request::url();
        $postViews->session_id = \Request::getSession()->getId();
        $postViews->user_id = (\Auth::check()) ? \Auth::id() : null;
        $postViews->ip = \Request::getClientIp();
        $postViews->agent = \Request::header('User-Agent');
        $postViews->save();
    }

    public static function PopularView()
    {
        return $posts = Post::join("post_views", "post_views.post_id", "=", "posts.id")
            ->where("post_views.created_at", ">=", date("Y-m-d H:i:s", strtotime('-24 hours', time())))
            ->groupBy("posts.id")
            ->orderBy(DB::raw('COUNT(posts.id)'), 'desc')
            ->take(3)
            ->get([DB::raw('COUNT(posts.id) as total_views'), 'posts.*']);
    }
}
