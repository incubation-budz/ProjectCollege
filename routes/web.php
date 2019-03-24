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


Route::get('/','WelcomeController@index');


Route::get('faculty',function(){
    return view('inside');
});


// homepage--Routes

Route::get('general','GeneralController@index')
->name('list-general');

Route::post('/general', 'GeneralController@store')
->name('store_element');







<<<<<<< HEAD
Route::get('news', [
    'uses' => 'Backend\BlogController1@post1',
    
]);

Route::get('/{post}',  [
    'uses' => 'Backend\BlogController1@show',
    'as' => 'blog.show'
]);
=======
Route::get('news',function(){
    return view('news');
});
>>>>>>> 662bf1ce9fd0fb74e79475202b9a3e050553352e

Route::get('/blog','WelcomeController@blog');


Route::get('admin',function(){
    return view('backend.index');
});
Route::get('user','PostController@list');





<<<<<<< HEAD
Route::get('mba',function(){
=======
Route::get('/mba',function(){
>>>>>>> 662bf1ce9fd0fb74e79475202b9a3e050553352e
    return view('mba');
});
Route::get('/mba-evening',function(){
    return view('mbaEve');
});
Route::get('/bcis',function(){
    return view('bcis');
});
Route::get('/bba',function(){
    return view('bba');
});
Route::get('/bba-tt',function(){
    return view('bba-tt');
});

Route::get('/bba-bi',function(){
    return view('bba-bi');
});

<<<<<<< HEAD











=======
>>>>>>> 662bf1ce9fd0fb74e79475202b9a3e050553352e
Auth::routes();

Route::get('hello',function(){
    return view('hello');
});

Route::get('all','PostController@all');

Route::get('/home', 'HomeController@index')->name('home');


Route::get('post','PostController@index');
Route::get('posts', 'PostController@index')->name('list_posts');


Route::get('/drafts', 'PostController@drafts')
->name('list_drafts')
->middleware('auth');

Route::get('/show/{id}', 'PostController@show')
->name('show_post');

Route::get('/create', 'PostController@create')
->name('create_post')
->middleware('can:create-post');

Route::get('/general-post', 'GeneralController@create')
->name('create_general')
->middleware('can:create-post');

Route::post('/create', 'PostController@store')
->name('store_post')
->middleware('can:create-post');

Route::get('/{post}', 'PostController@edit')
->name('edit_post')
->middleware('can:update-post,post');

Route::post('/{post}', 'PostController@update')
->name('update_post')
->middleware('can:update-post,post');

Route::get('/publish/{post}', 'PostController@publish')
->name('publish_post')
->middleware('can:publish-post');

Route::get('/delete/{id}', 'PostController@delete')
->name('delete_post');
Route::get('/general/post/{id}', 'GeneralController@delete')
->name('delete_general');


Route::get('Register',[
    'middleware'=>'admin',

]);


Route::get('terminate',[
    'middleware' => 'terminate',
    'uses' => 'RoleController@index'
]);


<<<<<<< HEAD
=======
Route::get('news', [
    'uses' => 'Backend\BlogController1@post1',

]);

Route::get('/{post}',  [
    'uses' => 'Backend\BlogController1@show',
    'as' => 'blog.show'
]);





>>>>>>> 662bf1ce9fd0fb74e79475202b9a3e050553352e
Route::resource('/backend1/blog', 'Backend\BlogController1', [
    'names' => [
        'create' => 'backend1.blog.create',
        'index' => 'backend1.blog.index',
        'edit' => 'backend1.blog.edit',
        'destroy' => 'backend1.blog.destroy',
        'store' => 'backend1.blog.store',
<<<<<<< HEAD
        
        
=======


>>>>>>> 662bf1ce9fd0fb74e79475202b9a3e050553352e
    ]

]);

Route::resource('/backend1/heighlights', 'Backend\HighlightsController', [
    'names' => [
        'create' => 'backend1.heighlights.create',
        'index' => 'backend1.heighlights.index',
        'edit' => 'backend1.heighlights.edit',
        'destroy' => 'backend1.heighlights.destroy',
        'store' => 'backend1.heighlights.store',
<<<<<<< HEAD
        
        
    ]

]);







=======


    ]

]);
>>>>>>> 662bf1ce9fd0fb74e79475202b9a3e050553352e

