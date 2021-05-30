<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
// admin
Route::group(['namespace' => 'backend', 'prefix' => 'admin'], function(){
    Route::get('/','HomeController@index')->name('get.home');

    // sản phẩm
    Route::group(['prefix' => 'product'], function(){
        Route::get('/','ProductController@index')->name('get.product');
        Route::get('/add-product','ProductController@addProduct')->name('add.product');
        Route::post('/add-product','ProductController@add')->name('add.p.product');

        Route::post('/','ProductController@getData')->name('get.data.product');

        Route::get('/edit-product/{id}','ProductController@editProduct')->name('edit.product');
        Route::post('/edit-product/{id}','ProductController@edit')->name('edit.p.product');
        Route::get('/del-product/{id}','ProductController@delProduct')->name('del.product');  
        Route::post('deleteAll','ProductController@delAll')->name('del.All.product');
        // cấp nhật trạng thái
        Route::post('/upStatus','ProductController@upStatus')->name('upSta.product');
        //cập nhật số tt 
        Route::post('editSTT','ProductController@edSTT')->name('edt.stt.product');  

    });

    //đơn hàng
        Route::group(['prefix' => 'oders'], function(){ 
        Route::get('/','OrdersController@index')->name('get.orders');
        Route::get('/edit-oders','OdersController@editOders')->name('edit.oders');
        Route::get('/del-oders','OdersController@delOders')->name('del.oders');
    });

    //loại sản phẩm
    Route::group(['prefix' => 'category'], function(){  
        Route::get('/','categoryController@index')->name('get.category');
        Route::post('/','categoryController@getData')->name('get.data.category');
        Route::get('/add-category','CategoryController@addcategory')->name('add.category');
        Route::post('/add-category','CategoryController@add')->name('add.p.category');

        Route::get('/edit-category/{id}','CategoryController@editcategory')->name('edit.category');
        Route::post('/edit-category/{id}','CategoryController@edit')->name('edit.p.category');
        Route::get('/del-category/{id}','CategoryController@delcategory')->name('del.category');
        Route::post('deleteAll','CategoryController@delAll')->name('del.All.category');

        // cấp nhật trạng thái
        Route::post('/upStatus','CategoryController@upStatus')->name('upSta.category');
        //cập nhật số tt 
        Route::post('editSTT','CategoryController@edSTT')->name('edt.stt.category');

    });

    //bài viết
    Route::group(['prefix' => 'posts'], function(){ 
        Route::get('/','postsController@index')->name('get.posts');
        Route::get('/add-posts','postsController@addposts')->name('add.posts');
        Route::get('/edit-posts','postsController@editposts')->name('edit.posts');
        Route::get('/del-posts','postsController@delposts')->name('del.posts');
    });

    //tài khoản
    Route::group(['prefix' => 'account'], function(){   
        Route::get('/permission','accountController@indexper')->name('get.permission');
        Route::get('/info-admin','accountController@indexif')->name('get.info');
        Route::get('/users','accountController@indexusr')->name('get.users');
        Route::get('/members','accountController@indexmeb')->name('get.members');

        Route::get('/add-member','accountController@addusr')->name('add.members');
        Route::get('/add-user','accountController@addmemb')->name('add.users');

        // Route::get('/add-account','accountController@addaccount')->name('add.account');
        // Route::get('/edit-account','accountController@editaccount')->name('edit.account');
        // Route::get('/del-account','accountController@delaccount')->name('del.account');
    });
    Route::group(['prefix' => 'search'], function(){    
        Route::get('/category','SearchController@searchCategory')->name('get.searchCate');
        Route::get('/product','SearchController@searchProduct')->name('get.searchPro');
    });
});
