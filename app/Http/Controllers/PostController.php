<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;
use Alert;
use App\Tag;
use Image;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $posts = Post::orderBy('id', 'desc')->paginate(10);
        return view('admin.post.index')->with('posts', $posts);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $select = [];
        foreach ($categories as $categori) {
            $select[$categori->id] = $categori->name_category;
        }
        $tags = Tag::all();
        return view('admin.post.create', compact('select', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'judul'         =>   'required',
            'body'          =>   'required',
            'slug'          =>   'required|alpha_dash|min:5|max:255',
            'tags'          =>   'required',
            'kategori'      =>   'required',
            'status'        =>   'required',
            'image'         =>   'image|max:1999'
        ]);

        // Using IMAGE INTERVENTION
        if ($request->hasFile('cover_image')) {
            $image = $request->file('cover_image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/' . $filename);
            Image::make($image)->resize(800, 600)->save($location);
            $fileNameToStore = $filename;
        } else {
            $fileNameToStore = 'no-photo.png';
        }

        $post = new Post;
        $post->title = $request->input('judul');
        $post->slug = $request->input('slug');
        $post->body = $request->input('body');
        $post->category_id = $request->input('kategori');
        $post->status = $request->input('status');
        $post->author_id = auth()->user()->id;
        $post->image = $fileNameToStore;

        $post->save();
        $post->tags()->sync($request->input('tags'), false);

        Alert::success('Berhasil menambahkan postingan', 'OK, Success!!! ');
        return redirect()->route('post.index');
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
        $posts = Post::findOrFail($id);

        $categories = Category::all();
        $select = [];
        foreach ($categories as $categori) {
            $select[$categori->id] = $categori->name_category;
        }

        $tags = Tag::all();
        $ara = array();
        foreach ($tags as $tag) {
            $ara[$tag->id] = $tag->name;
        }
        // dd($ara);
        return view('admin.post.edit')->with('post', $posts)
            ->with('select', $select)
            ->with('tags', $ara);
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
        $this->validate($request, [
            'judul'         =>   'required',
            'body'          =>   'required',
            'slug'          =>   'required|alpha_dash|min:5|max:255',
            'kategori'      =>   'required',
            'tags'      =>   'required',
            'status'        =>   'required'
        ]);

        $post = Post::findOrFail($id);
        $post->title = $request->input('judul');
        $post->slug = $request->input('slug');
        $post->body = $request->input('body');
        $post->category_id = $request->input('kategori');
        $post->status = $request->input('status');
        $post->author_id = 1;

        // Using IMAGE INTERVENTION
        if ($request->hasFile('cover_image')) {
            $image = $request->file('cover_image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/' . $filename);
            Image::make($image)->resize(800, 600)->save($location);
            $post->image = $filename;
        } else {
            $fileNameToStore = 'no-photo.png';
        }

        $post->save();
        if ($request->input('tags')) {
            $post->tags()->sync($request->input('tags'));
        } else {
            $post->tags()->sync(array());
        }
        Alert::success('Berhasil mengubah postingan', 'OK, Success!!! ');
        return redirect()->route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->tags()->detach();
        $post->delete();
        Alert::success('Berhasil menghapus Postingan', 'OK, Success!!! ');
        return redirect()->route('post.index');
    }
}
