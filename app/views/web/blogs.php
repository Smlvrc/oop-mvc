<?php view('partials/header') ?>
<?php foreach ($blogs as $blog): ?>

<div class="item project-wrapper" data-aos="fade-up" data-aos-delay="100">
    <img src="<?= img($blog['image']) ?>" class="img-fluid" alt="project image">

    <div class="project-info">
        <small><?= $blog['title']; ?></small>

        <h3>
            <a href="<?= url('web/blogdetail/'.$blog['id']) ?>">
                <span><?= $blog['text']; ?></span>

            </a>
        </h3>
    </div>
</div>
<?php endforeach;?>
<?php view('partials/footer') ?>