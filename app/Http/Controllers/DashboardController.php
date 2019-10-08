<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\Tag;
use App\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $countPosts = Post::count();
        $countUsers = User::count();
        $countCategories = Category::count();
        $countTags = Tag::count();
        return view('admin.dashboard.index', compact('countPosts', 'countUsers', 'countCategories', 'countTags'));
    }
}
