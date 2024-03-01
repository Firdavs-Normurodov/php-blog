<?php
$title = 'Post';
require 'includes/header.php'; 
require 'datebase.php';
$id=$_GET['id'];
$statement=$pdo->prepare("SELECT * FROM posts WHERE id=:id");
$statement->execute(['id'=> $id]);
$post=$statement->fetch();
?>


<div class="container mt-5">
  <div class="row">
  <h1 class="text-body-emphasis"><?= $post['title'] ?></h1>
    <p class="fs-5 col-md-8"><?= $post['body'] ?></p>
    <p class="fs-5 col-md-8"><?= $post['created_at'] ?></p>

    <div class="mb-5">
      <a href="blog.php" class="btn btn-primary btn-lg px-4">ortga</a>
    </div>

    <hr class="col-3 col-md-2 mb-5">

    
  </div>
</div>


<?php require 'includes/footer.php' ?>