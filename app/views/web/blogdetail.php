<?php view('partials/header') ?>

    <div class="item project-wrapper" data-aos="fade-up" data-aos-delay="100">
        <h2 >Blog details</h2>
        <img src="<?= img($blog['image']) ?? "" ?>" class="img-fluid" alt="project image">

        <div class="project-info">
            <small><?= $blog['title'] ?? "" ?></small>

            <h3>
                <a href="">
                    <span><?= $blog['text'] ?? "" ?></span>

                </a>
            </h3>
        </div>
    </div>

<?php view('partials/footer') ?>