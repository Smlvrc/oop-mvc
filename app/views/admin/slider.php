<?php
view('admin/partials/header'); ?>
<div class="container my-2">
    <form action="<?php url('/admin/slider')?>" method="post" enctype="multipart/form-data">
        <input type="text" name="title" value="<?= $slider['title'] ?? 'fvgf' ?>" placeholder="title" class="form-control">
        <textarea class="form-control" placeholder="text"  name="text" id="" cols="30" rows="10"><?= $slider['text'] ?? '' ?></textarea>
        <?php
        if( $slider['image'] ?? ''){
         ?>
            <img width="200px" src="<?= img( $slider['image'] ?? '') ?>" alt="">
         <?php }
        ?>
        <input class="form-control" type="file" name="image">
        <button class="btn btn-sm btn-primary">send</button>
    </form>
</div>
<?php view('admin/partials/footer'); ?>