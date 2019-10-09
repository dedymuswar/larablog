<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Image;
use Alert;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('id', 'asc')->paginate(10);
        return view('admin.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create');
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
            'nama'         =>   'required',
            'email'          =>   'required|email',
            'password'          =>   'sometimes',
            'role'      =>   'required',
            'cover_image'         =>   'required|image|max:1999'
        ]);

        // Using IMAGE INTERVENTION
        if ($request->hasFile('cover_image')) {
            $image = $request->file('cover_image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/user/' . $filename);
            Image::make($image)->fit(600, 600, null)->save($location);
            $fileNameToStore = $filename;
        } else {
            $fileNameToStore = 'no-photo.png';
        }

        $user = new User;
        $user->name = $request->input('nama');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->name = $request->input('nama');
        $user->syncRoles($request->input('role'));
        $user->image = $fileNameToStore;

        $user->save();
        Alert::success('Berhasil menambahkan User baru', 'OK, Success!!! ');
        return redirect()->route('user.index');
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
        $user = User::findOrFail($id);
        return view('admin.user.edit', compact('user'));
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
            'nama'              =>   'required',
            'email'             =>   'required|email',
            'password'          =>   'sometimes',
            'role'              =>   'required',
            'cover_image'       =>   'image|max:1999'
        ]);

        $user = User::findOrFail($id);
        $user->name = $request->input('nama');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->name = $request->input('nama');
        $user->syncRoles($request->input('role'));


        // Using IMAGE INTERVENTION
        if ($request->hasFile('cover_image')) {
            $image = $request->file('cover_image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/user/' . $filename);
            Image::make($image)->fit(600, 600, null)->save($location);
            $fileNameToStore = $filename;
        } else {
            $fileNameToStore = $user->image;
        }

        $user->image = $fileNameToStore;
        $user->save();
        Alert::success('Berhasil mengubah data User', 'OK, Success!!! ');
        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        Alert::success('Berhasil menghapus User', 'OK, Success!!! ');
        return redirect()->route('user.index');
    }
}
