<?php


namespace app\controllers;

use app\models\Blog;
use app\models\Slider;
use Core\FileService;

class blogController
{
    private FileService $fileService;

    public function __construct()
    {
        $this->fileService = new FileService();
    }

    public function index()
    {
        $blogs = (new Blog())->all();
        return view('admin/blog/index', compact('blogs'));
    }

    public function create()
    {
        return view('admin/blog/form', ['blog' => null]);
    }

    public function store()
    {

        $title = htmlentities(postData('title'));
        $text = htmlentities(postData('text'));
        $slug = htmlentities(postData('slug'));


        $this->fileService->checkFile('image');
        if (!$this->fileService->validateType('image', ['jpeg', 'jpg', 'png'])) {
            throw new \Error('Faylin tipi sehvdi');
        }
        $fileName = $this->fileService->upload('image');

        (new Blog())->buildCreate([
            'title' => $title,
            'text' => $text,
            'slug' => $slug,
            'image' => $fileName
        ]);
        return redirect(url('/admin/blog'), true);
    }

//blog update
    public function update($id)
    {
        $blog = (new Blog())->where('id', (int)$id)->first();

        $title = htmlentities(postData('title'));
        $text = htmlentities(postData('text'));
        $slug = htmlentities(postData('slug'));

        $data = [
            'title' => $title,
            'text' => $text,
            'slug' => $slug,
        ];

        if ($this->fileService->hasFile('image')) {
            if (!$this->fileService->validateType('image', ['jpeg', 'jpg', 'png'])) {
                throw new \Error('Faylin tipi sehvdi');
            }
            $fileName = $this->fileService->replace('image', $blog['image']);
            $data['image'] = $fileName;
        }

        (new Blog())->where('id', (int)$id)->update($data);
        return redirect(url('/admin/blog'), true);
    }
//edit
    public function edit($id)
    {
        $blog = (new Blog())->where('id', (int)$id)->first();

        if (!$blog) {
            throw new \Exception('no datakdjkjckdjsc');
        }

        return view('/admin/blog/form',compact("blog"));
    }


//    delete
public function delete($id){
    (new Blog())->where('id', (int)$id)->delete();
    return redirect(url('/admin/blog'), true);

}

public function bloglist(){

        $blogs=(new Blog())->all();
        return view('web/blogs',compact('blogs'));
}

}