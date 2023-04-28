<?php
view('admin/partials/header'); ?>
    <div class="container my-2">
        <form action="<?= $blog ? url('/admin/blog/update/'.$blog['id']) : url('/admin/blog/store')?>" method="post" enctype="multipart/form-data">
            <input type="text" name="title" value="<?= $blog['title'] ?? '' ?>" placeholder="title" class="form-control">
            <input type="text" name="slug" value="<?= $blog['slug'] ?? '' ?>" placeholder="slug" class="form-control">

            <textarea class="form-control" placeholder="text"  name="text" id="" cols="30" rows="10"><?= $blog['text'] ?? '' ?></textarea>
            <input class="form-control" type="file" name="image">
            <?php
            if( $blog['image'] ?? ''){
                ?>
                <img width="200px" src="<?= img( $blog['image'] ?? '') ?>" alt="">
            <?php }
            ?>
            <button class="btn btn-sm btn-primary">Save</button>
        </form>
    </div>
<?php view('admin/partials/footer'); ?>