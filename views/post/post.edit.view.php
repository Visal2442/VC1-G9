<?php require "../../views/partials/head.php" ?>
<?php require "../../utils/url.php" ?>
<?php require "../../views/partials/nav.php" ?>

<div class="card mt-5">
    <div class="card-body">
        <form action="../../controllers/post/post.update.controller.php" method="post">
            <input type="hidden" value="<?= $post['id'] ?>" name="id">
            <div class="form-group">
                <input type="text" placeholder="title" class="form-control" name="title" value="<?= $post['title'] ?>">
            </div>
            <div class="form-group">
                <textarea class="form-control" placeholder="Description" name="description"><?= $post['description'] ?></textarea>
            </div>
            <div class="form-group">
                <button class="btn btn-block btn-primary">Add Post</button>
            </div>
        </form>
    </div>
</div>

<?php require "../../views/partials/footer.php" ?>