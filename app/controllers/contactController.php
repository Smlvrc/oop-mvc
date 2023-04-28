<?php

namespace app\controllers;
use app\models\Blog;
use app\models\Slider;
use Core\FileService;
use Core\models\Contact;
class contactController
{
    public function showcontact(){
        return view('/web/contact');
    }

    public function send(){
        $contact= new Contact();
//        $validation=new Validation();
        $name=postData('name');
        $email=postData('email');
        $message=postData('message');

        $data=[
            'name'=>$name,
            'email'=>$email,
            'message'=>$message
        ];

        $contact->create($data);
        return view('admin/contact', compact('contact','contact'));


    }

}