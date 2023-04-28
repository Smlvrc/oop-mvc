<?php view('admin/partials/header'); ?>

<div class="container mt-2">
    <a class="btn btn-sm btn-primary" href="<?= url('/admin/blog/create')?>">Add blog</a>
    <table class="table">
<thead>
<tr>
    <th>id</th>
    <th>title</th>
    <th>slug</th>
    <th>Şəkil</th>
    <th>edit</th>
    <th>delete</th>
    </tr>
</thead>
        <tbody>
    <?php
    foreach ($blogs as $blog):
    ?>
        <tr>
            <td><?= $blog['id']; ?></td>
            <td><?= $blog['title']; ?></td>
            <td><?= $blog['slug']; ?></td>
            <td><img src="<?= img('/'.$blog['image'])  ?>" style="height: 50px; border-radius: 10px;"></td>
            <td>
                <a href="<?= url('/admin/blog/edit/'. $blog['id'])?>">Edit</a>
            </td>
            <td>
                <form action="<?= url('/admin/blog-delete/'.$blog['id'])  ?>" method="POST">
                    <button class="btn btn-danger">Delete</button>
                </form>
            
            </td>
        </tr>
    <?php endforeach; ?>
        </tbody>

    </table>
</div>

<?php view('admin/partials/footer'); ?>

