<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Spatie\Permission\Models\Role;

Route::get('/', function () {
    return view('web.home.index');
    // ROLE
    // Assign user have role
    // auth()->user()->assignRole('user');

    //Cek user has Role

    // if (auth()->user()->hasRole('user')) {
    //     return "sukses bosku";
    // }

    // Remove Role user
    // auth()->user()->removeRole('admin');

    // PERMISSION
    $user = auth()->user();
    //give permission to user with permission table
    // $user->givePermissionTo('edit post');

    //cek permision yang dimiliki user
    // dd($user->hasPermissionTo('delete post'));

    //delete permission user
    // $user->revokePermissionTo('delete post');

    //sync permission
    // $user->syncPermissions(['add post', 'delete post']);

    //GIVE PERMISSION TO ROLE
    $role = Role::find(2);
    // $role->givePermissionTo('add post', 'edit post');

    //CEK ROLE PERMISSION
    // dd($role->hasAnyPermission('add post', 'edit post'));
});

Route::group(['middleware' => ['role:admin|user']], function () {

    //TAGS
    Route::post('tagAdd', 'TagController@store')->name('tag.add');
    Route::get('delete/tag/{id}', 'TagController@destroy')->name('tag.delete');
    Route::resource('tag', 'TagController');

    //CATEGORIES
    Route::post('categoryAdd', 'CategoryController@store')->name('category.add');
    Route::get('delete/category/{id}', 'CategoryController@destroy')->name('category.delete');
    Route::resource('category', 'CategoryController');

    //USER
    Route::get('delete/user/{id}', 'UserController@destroy')->name('user.delete');
    Route::resource('user', 'UserController');

    //POST
    Route::get('delete/{id}', 'PostController@destroy')->name('post.delete');
    Route::resource('post', 'PostController');


    //PROFIL
    Route::put('profil/{id}', 'ProfilController@updateName')->name('change.name');
    Route::put('profil/picture/{picture_user}', 'ProfilController@updatePicture')->name('change.picture');
    Route::resource('/profil', 'ProfilController');

    Route::get('/dashboard', 'DashboardController@index')->name('dashboard.index');
    Route::get('/home', 'HomeController@index')->name('home');

    // Auth Logout
    Route::get('logout', 'Auth\LoginController@logout');
});


Route::get('view_post', 'PostViewController@CounterView')->name('counterview');
Route::get('webhome', 'WebblogController@webhome')->name('webhome');
Route::get('posts', 'WebblogController@webblog')->name('allposts');
Route::get('posts/{slug}', ['as' => 'blog.artikel', 'uses' => 'WebblogController@artikel'])->where('slug', '[\w\d\-\_]+');
Auth::routes();
