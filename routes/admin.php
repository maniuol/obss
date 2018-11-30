<?php

Route::group([
    'namespace'  => 'Bitfumes\Multiauth\Http\Controllers',
    'middleware' => ['web', 'prevent-back-history'],
    'prefix'     => config('multiauth.prefix', 'admin'),
], function () {
    Route::GET('/home', 'AdminController@index')->name('admin.home');
    // Login and Logout
    Route::GET('/', 'LoginController@showLoginForm')->name('admin.login');
    Route::POST('/', 'LoginController@login');
    Route::POST('/logout', 'LoginController@logout')->name('admin.logout');

    // Password Resets
    Route::POST('/password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::GET('/password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::POST('/password/reset', 'ResetPasswordController@reset');
    Route::GET('/password/reset/{token}', 'ResetPasswordController@showResetForm')->name('admin.password.reset');

    // Register Admins
    Route::get('/register', 'RegisterController@showRegistrationForm')->name('admin.register');
    Route::post('/register', 'RegisterController@register');
    Route::get('/{admin}/edit', 'RegisterController@edit')->name('admin.edit');
    Route::delete('/{admin}', 'RegisterController@destroy')->name('admin.delete');
    Route::patch('/{admin}', 'RegisterController@update')->name('admin.update');

    // Admin Lists
    Route::get('/show', 'AdminController@show')->name('admin.show');

    // Admin Roles
    Route::post('/{admin}/role/{role}', 'AdminRoleController@attach')->name('admin.attach.roles');
    Route::delete('/{admin}/role/{role}', 'AdminRoleController@detach');

    // Roles
    Route::get('/roles', 'RoleController@index')->name('admin.roles');
    Route::get('/role/create', 'RoleController@create')->name('admin.role.create');
    Route::post('/role/store', 'RoleController@store')->name('admin.role.store');
    Route::delete('/role/{role}', 'RoleController@destroy')->name('admin.role.delete');
    Route::get('/role/{role}/edit', 'RoleController@edit')->name('admin.role.edit');
    Route::patch('/role/{role}', 'RoleController@update')->name('admin.role.update');

    //custom routes
    //profile show
    Route::get('/profile', 'AdminController@profile')->name('admin.profile');

    //profile update
    Route::post('profile/update', 'AdminController@admin_profile')->name('profile.update');

    //prodicts show

    Route::get('/products', 'AdminController@products')->name('admin.products');

    Route::get('products/show', 'AdminController@products_show')->name('admin.products.show');

    //single product show



    Route::get('single/product/{id}', 'AdminController@singleproduct')->name('singleproduct'); 
   //delete product
    Route::post('product/delete', 'AdminController@deleteproduct')->name('product.delete'); 
   
   // add product
     Route::get('product/add', 'AdminController@product_form')->name('add.products');


      Route::post('product/add', 'AdminController@add_products')->name('admin.add.products');















     Route::get('/{any}', function () {
         return abort(404);
     });


    

    
});
