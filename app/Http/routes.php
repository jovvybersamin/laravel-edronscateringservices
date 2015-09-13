<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/',[
   'as' =>  'frontend.home',
   'uses' => 'PagesController@home'
]);

Route::get('gallery',[
   'as' => 'frontend.gallery',
   'uses' => 'PagesController@gallery'
]);

Route::get('menu',[
    'as' => 'frontend.menu',
    'uses' => 'PagesController@menu'
]);

//Route::get('/','Admin\PackageController@index');

Route::group(['namespace' => 'Admin'], function()
{
    // Add Admin Middleware here.
    Route::group(['prefix' => 'admin'],function()
    {

        Route::get('/','PackageController@index');
        Route::resource('packages','PackageController');

        Route::post('package/media',[
            'as'    =>  'admin.packages.media',
            'uses'  =>  'PackageController@media'
        ]);

        Route::resource('menus','MenuController');
        Route::resource('menuitems','MenuItemController');

        Route::group(['namespace' => 'Packages'], function()
        {
            Route::get('package-course/getTable',[
                'as'      => 'admin.package-course.getTable',
                'uses'    => 'PackageCourseController@getTable'
            ]);

            Route::resource('package-course','PackageCourseController');

            Route::resource('package-rule','PackageRuleController');
        });

    });

});


Route::get('logout',array('as' => 'user.logout','uses' => 'Auth\AuthController@getLogout'));
Route::get('login',array('as' => 'user.login','uses' => 'Auth\AuthController@getLogin'));

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);