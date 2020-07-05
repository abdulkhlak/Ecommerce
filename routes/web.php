<?php

Auth::routes();
//                   BACKEND ROUTE

Route::get('/dashboard','Backend\BackendController@index')->name('dashboard')->middleware('auth');

Route::group(['prefix' => 'Users',  'middleware' => 'auth'], function()
{
    Route::get('/view','Backend\UsersController@view')->name('users_view');
    Route::get('/add','Backend\UsersController@add')->name('users_add');
    Route::post('/store','Backend\UsersController@store')->name('users_store');
    Route::get('/userStatus/{id}/{s}','Backend\UsersController@userStatus')->name('users_status');
    Route::get('/edit/{id}','Backend\UsersController@edit')->name('users_edit');
    Route::post('/update/{id}','Backend\UsersController@update')->name('users_update');
    Route::get('/delete/{id}','Backend\UsersController@delete')->name('users_delete');

});
Route::group(['prefix' => 'profile',  'middleware' => 'auth'], function()
{
    Route::get('/view','Backend\ProfileController@view')->name('profile_view');
    Route::get('/edit','Backend\ProfileController@edit')->name('profile_edit');
    Route::post('/update','Backend\ProfileController@update')->name('profile_update');
    Route::get('/password','Backend\ProfileController@password')->name('profile_password');
    Route::post('/password/update','Backend\ProfileController@passwordUpdate')->name('password_update');

});

// BRANDS ROUTE

Route::group(['prefix' => 'brands',  'middleware' => 'auth'], function()
{
    Route::get('/view','Backend\BrandsController@view')->name('brands_view');
    Route::get('/add','Backend\BrandsController@add')->name('brands_add');
    Route::post('/store','Backend\BrandsController@store')->name('brands_store');
    Route::get('/brandStatus/{id}/{s}','Backend\BrandsController@BrandsStatus')->name('brands_status');
    Route::get('/edit/{id}','Backend\BrandsController@edit')->name('brands_edit');
    Route::put('/update/{id}','Backend\BrandsController@update')->name('brands_update');
    Route::get('/delete/{id}','Backend\BrandsController@delete')->name('brands_delete');

});

// CATEGORIES ROUTE

Route::group(['prefix' => 'categories',  'middleware' => 'auth'], function()
{
    Route::get('/view','Backend\CategoriesController@view')->name('categories_view');
    Route::get('/add','Backend\CategoriesController@add')->name('categories_add');
    Route::post('/store','Backend\CategoriesController@store')->name('categories_store');
    Route::get('/categoryStatus/{id}/{s}','Backend\CategoriesController@categoryStatus')->name('categories_status');
    Route::get('/edit/{id}','Backend\CategoriesController@edit')->name('categories_edit');
    Route::post('/update/{id}','Backend\CategoriesController@update')->name('categories_update');
    Route::get('/delete/{id}','Backend\CategoriesController@delete')->name('categories_delete');

});

// SUBCATEGORY ROUTE

Route::group(['prefix' => 'subcategories',  'middleware' => 'auth'], function()
{
    Route::get('/view','Backend\SubcategoryController@view')->name('subcategories_view');
    Route::get('/add','Backend\SubcategoryController@add')->name('subcategories_add');
    Route::post('/store','Backend\SubcategoryController@store')->name('subcategories_store');
    Route::get('/subCategoryStatus/{id}/{s}','Backend\SubcategoryController@subCategoryStatus')->name('subcategories_status');
    Route::get('/edit/{id}','Backend\SubcategoryController@edit')->name('subcategories_edit');
    Route::post('/update/{id}','Backend\SubcategoryController@update')->name('subcategories_update');
    Route::get('/delete/{id}','Backend\SubcategoryController@delete')->name('subcategories_delete');

});

// SLIDERS ROUTE

Route::group(['prefix' => 'sliders',  'middleware' => 'auth'], function()
{
    Route::get('/view','Backend\SliderController@view')->name('sliders_view');
    Route::get('/add','Backend\SliderController@add')->name('slider_add');
    Route::post('/store','Backend\SliderController@store')->name('slider_store');
    Route::get('/sliderStatus/{id}/{s}','Backend\SliderController@sliderStatus')->name('slider_status');
    Route::get('/edit/{id}','Backend\SliderController@edit')->name('slider_edit');
    Route::post('/update/{id}','Backend\SliderController@update')->name('slider_update');
    Route::get('/delete/{id}','Backend\SliderController@delete')->name('slider_delete');

});

// SLIDERS ROUTE

Route::group(['prefix' => 'products',  'middleware' => 'auth'], function()
{
    Route::get('/view','Backend\ProductController@view')->name('product_view');
    Route::get('/add','Backend\ProductController@add')->name('product_add');
    Route::post('/store','Backend\ProductController@store')->name('product_store');
    Route::get('/productStatus/{id}/{s}','Backend\ProductController@productStatus')->name('product_status');
    Route::get('/find-categories/{id}','Backend\ProductController@findCategories')->name('find_categories');
    Route::get('/upByingPrice/{id}/{price}','Backend\ProductController@upByingPrice')->name('upByingPrice');
    Route::get('/edit/{id}','Backend\ProductController@edit')->name('product_edit');
    Route::post('/update/{id}','Backend\ProductController@update')->name('product_update');
    Route::get('/delete/{id}','Backend\ProductController@delete')->name('product_delete');

});

//                  FRONTEND ROUTE

Route::get('/','Frontend\FrontendController@index')->name('home');


