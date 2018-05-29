<?php

//Authenticate routes
Auth::routes();


//Static routes
Route::get('/', [
        'as' => 'home_path',
        'uses' => 'PagesController@home'
    ]);

Route::get('/about', [
    'as' => 'about_path',
    'uses' => 'PagesController@about'
]);

Route::get('/contact', [
    'as' => 'contact_path',
    'uses' => 'ContactsController@create'
]);

Route::post('/contact', [
    'as' => 'contact_path',
    'uses' => 'ContactsController@store'
]);


//Users route
Route::group(['prefix' => 'account', 'middleware' => 'auth'], function() {
    
    Route::get('/', [
        'as' => 'account_path',
        'uses' => 'UserController@account'
    ]);

    Route::get('/edit', [
        'as' => 'edit_account_path',
        'uses' => 'UserController@edit_account'
    ]);

    Route::patch('/', [
        'as' => 'account_path',
        'uses' => 'UserController@update_account'
    ]);

    Route::get('/set_password', [
        'as' => 'new_password_path',
        'uses' => 'UserController@set_password'
    ]);

    Route::patch('/set_password', [
        'as' => 'new_password_path',
        'uses' => 'UserController@update_password'
    ]);
    
});


//Arisan routes...
Route::get('/artisans', [
    'as' => 'artisans_path',
    'uses' => 'Usercontroller@index'
]);

Route::get('@{username}', [
    'as' => 'profile_path',
    'uses' => 'Usercontroller@profile'
]);




