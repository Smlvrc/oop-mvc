<?php


use App\Controllers\homeController;
use App\controllers\contactController;
use App\Controllers\sliderController;
use Core\RouterService as Route;
use App\controllers\blogController;
use Core\FileService;

Route::get('/', [homeController::class, 'index']);
//Route::get('/web/blogs', [homeController::class,'show']);
Route::get('/web/contact', [contactController::class,'showcontact']);
Route::get('/web/blogs',[blogController::class,'bloglist']);
Route::get('/blogdetail/{id}', [homeController::class,'showdetail']);




//Route::get('/',function(){
//return view('home');
//});
//Route::get('/', [HomeController::class, 'home']);
//Route::get('home', [HomeController::class, 'index']);
//Route::get('home/{username}', [HomeController::class, 'user']);
//Route::get('form', [HomeController::class, 'form']);
//
//Route::post('form',function (){});
//$fileService=new FileService();
//die($fileService->hasFile('image'));
//
//
//Route::get('slider-add', function () {
//    return view('slider/add');
//});
//Route::post('slider-add', [SliderController::class, 'store']);
//Route::get('sliders', [SliderController::class, 'sliders']);
