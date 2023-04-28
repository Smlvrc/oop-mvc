<?php


namespace app\controllers;
use app\models\Blog;
use app\models\Slider;

class homeController
{
public function index(){

    $slider=(new slider())->first();
    $blogs=(new Blog())->all();
    return view('web/home',compact('slider','blogs'));
}

    public function show()
    {
        return view('web/blogs');
    }
    public function showdetail($id){
        $blog=(new Blog())->where('id',(int)$id)->first();
        return view('web/blogdetail',compact('blog'));
    }
}