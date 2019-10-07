<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Alert;
use Image;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = auth()->user();
        $role = $id->roles()->pluck('name');

        $user = auth()->user()->id;
        $profil = User::findOrFail($user);
        return view('admin.profile.index', compact('profil', 'role'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { }

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
        //
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
            'old_password'         =>   'required',
            'new_password'         =>   'required',
            'confirm_password'         =>   'required'
        ]);

        $user = User::findOrFail($id);
        $user->password = bcrypt($request->input('new_password'));
        $user->save();
        Alert::success('Berhasil mengubah Password', 'OK, Success!!! ');
        return redirect()->route('profil.index');
    }

    public function updateName(Request $request, $id)
    {
        $this->validate($request, [
            'new_name'         =>   'required'
        ]);

        $user = User::findOrFail($id);
        $user->name = $request->input('new_name');
        $user->save();
        Alert::success('Berhasil mengubah Username', 'OK, Success!!! ');
        return redirect()->route('profil.index');
    }

    public function updatePicture(Request $request, $id)
    {
        $this->validate($request, [
            'profile_picture'         =>   'required|image|max:1999'
        ]);

        $user = User::findOrFail($id);
        // dd($request->all());
        // Using IMAGE INTERVENTION
        if ($request->hasFile('profile_picture')) {
            $image = $request->file('profile_picture');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/user/' . $filename);
            Image::make($image)->resize(800, 600)->save($location);
            $user->image = $filename;
        } else {
            $user->image = 'avatar9.jpg';
        }

        $user->save();
        Alert::success('Berhasil mengubah Profil picture', 'OK, Success!!! ');
        return redirect()->route('profil.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
