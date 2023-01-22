<?php require "views/partials/head.php" ?>
<?php require "views/partials/nav.php" ?>
<?php require "views/partials/banner.php" ?>
  <a href="views/post/post.create.view.php" class="btn btn-primary mt-2">Add Post</a>
  <main>
    <div class="p-3">
    <?php foreach($posts as $post): ?>
      <li>
        <?= $post['title'] ?> |  
        <span><?= $post['description'] ?></span> | 
        <a href="controllers/post/post.delete.controller.php?id=<?= $post['id'] ?>" >Delete</a> |
        <a href="controllers/post/post.edit.controller.php?id=<?= $post['id'] ?>">Edit</a>
      </li>

    <?php endforeach; ?>
    </div>
  </main>

<?php require "views/partials/footer.php" ?>
