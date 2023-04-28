<?php
use Core\RouterService as Route;
use Core\FileService;
use app\controllers\sliderController;
use app\controllers\blogController;
 use app\controllers\contactController;


Route::get('admin/slider',[sliderController::class,'index']);
Route::post('admin/slider',[sliderController::class,'store']);

Route::get('admin/blog',[blogController::class,'index']);
Route::get('admin/blog/create',[blogController::class,'create']);
Route::post('admin/blog/store',[blogController::class,'store']);
Route::get('admin/blog/edit/{id}',[blogController::class,'edit']);
Route::post('admin/blog/update/{id}',[blogController::class,'update']);
Route::post('admin/blog-delete/{id}',[blogController::class,'delete']);

Route::post('admin/contact', [contactController::class, 'send']);