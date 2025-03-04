<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// Route::group(['prefix'=> 'user'], function(){


//     Route::get('/home', function () {
//         return "Sample Ui";
//     })->name('homePage');
    
//     Route::get('/about', function () {
//         return"<a href =".route('homePage'). "'>Home</a>'"; 
//     })->name('aboutPage');
    
//     // Route the user to the page with the id of 1 or any id
//     Route::get('edit/{id}',function ($id) {
//         return "<a href=".route('hello',$id)."'>Edit</a>'";  
//     });
    
//     Route::get('user/{id}', function ($id) {
//         return $id;
//     })->name('hello');
// });

Route::fallback(function(){

    return "    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            text-align: center;
            flex-direction: column;
        }
    </style>
    <img src='http://mobilepetcremation.com.sg/images/404.jpg' alt='404'/>";
});



// Route::fallback(function(){

//     return redirect()->route('homePage');
// });

Route::group(['prefix' => 'user'], function() {
    Route::get('/dash', [BlogController::class, 'SampleModel'])->name('dash');
    Route::post('/create', [BlogController::class, 'createBlogData'])->name('blog.create');
});

    


Route::group(['prefix'=> 'admin'], function(){

    route::get('/dash', function(){
        return view('admin.dashboard');
    });

    Route::get('/home1', [BlogController::class, 'retrieveBlogs']);


    Route::get('/home/{name}', function ($name) {
        return view('admin.home',['name'=>$name]);
    });

    // Route::get('/four', function () {
    //     return view('four');
    // });

    Route::get('/five', function () {
        return view('layout.master');
    });
    


});


    Route::get ('/four', [LoginController::class, 'index']);
    Route::post('/four', [BlogController::class, 'Submit'])->name('four.submit');

    Route::get('/data', [BlogController::class, 'index']);









