<?php


//////////////// web 
/////// arabic
    Route::get('/', 'HomeController@ar_index');
    Route::get('/project', 'HomeController@ar_project');
    Route::get('/blog', 'HomeController@ar_blog');
    Route::get('/news', 'HomeController@ar_news');
    Route::get('/blog/{id}', 'HomeController@show_blog');
    Route::get('/news/{id}', 'HomeController@show_news');
    Route::get('/video', 'HomeController@video');
    Route::any('/contact', 'HomeController@contact');






/////////// control_panell
/////////////// Admin 
Route::prefix('admin')->group(function () {
    /////////// localhost/admin

    Route::namespace('Admin')->group(function () {

        Route::any('/login','PrefController@login')->name('login');
        Route::get('logout' , 'PrefController@logout');
        Route::any('sendToken' , 'PrefController@sendToken');
        Route::any('paswordreset/{id}/{token}' , 'PrefController@paswordreset');
        Route::middleware(['middleware' => 'manager'])->group(function () {
           
           
            Route::get('/', 'PrefController@index')->middleware('admin');
            Route::resource('prefs'    , 'PrefController')->middleware('admin');

            Route::resource('user'    , 'UserController')->middleware('admin');
            Route::get('user/delete/{id}', 'UserController@destroy');

           
            Route::resource('news' , 'NewsController');
            Route::get('news/delete/{id}', 'NewsController@destroy');

            Route::resource('project' , 'ProjectController');
            Route::get('project/delete/{id}', 'ProjectController@destroy');

            Route::resource('blog' , 'BlogController');
            Route::get('blog/delete/{id}', 'BlogController@destroy');

            Route::resource('video' , 'VideoController');
            Route::get('video/delete/{id}', 'VideoController@destroy');

         
           
        });

    });
});





//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
