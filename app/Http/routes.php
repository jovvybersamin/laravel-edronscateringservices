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

Route::get('package',[
    'as' => 'frontend.packages',
    'uses' => 'PagesController@packages'
]);

Route::get('contact',[
    'as' => 'frontend.contact',
    'uses' => 'PagesController@contact'
]);

Route::get('package1',[
    'as' => 'frontend.package_menu',
    'uses' => 'PagesController@package_menu'
]);

Route::get('package2',[
    'as' => 'frontend.package_menu',
    'uses' => 'PagesController@package_menu2'
]);


Route::group(['prefix' => 'frontend'], function()
{
    
});


//Route::get('/','Admin\PackageController@index');

Route::group(['namespace' => 'Admin'], function()
{
    // Add Admin Middleware here.
    Route::group(['middleware' => 'auth.admin'], function(){

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
                    'as'        => 'admin.package-course.getTable',
                    'uses'      => 'PackageCourseController@getTable'
                ]);

                Route::get('package-menuitem/getTable',[
                    'as'        =>  'admin.package-menuitem.getTable',
                    'uses'      =>  'PackageMenuItemController@getTable'
                ]);

                Route::get('package-menuitem/getModalTable/{id}',[
                    'as'        =>  'admin.package-menuitem.getModalTable',
                    'uses'      =>  'PackageMenuItemController@getModalTable'
                ]);

                Route::post('package-menuitem/add/{id}',[
                    'as'         =>  'admin.package-menuitem.add',
                    'uses'       => 'PackageMenuItemController@add'
                ]);

                Route::resource('package-course','PackageCourseController');

                Route::resource('package-rule','PackageRuleController');
            });

            Route::group(['namespace' => 'Users'],function()
            {
                Route::resource('users','UserController');
            });

            Route::group(['namespace' => 'Events'],function()
            {
                Route::resource('events','EventController');
            });

        });
    });


});


Route::get('logout',array('as' => 'user.logout','uses' => 'Auth\AuthController@getLogout'));
Route::get('login',array('as' => 'user.login','uses' => 'Auth\AuthController@getLogin'));
Route::get('register',array('as' => 'user.register','uses' => 'Auth\AuthController@getRegister'));

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);