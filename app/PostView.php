<?php

namespace App;

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
}
