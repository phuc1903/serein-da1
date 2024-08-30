 <!-- About Start -->
 <div class="container-xxl py-5">
     <div class="container">
         <!-- tittle heading -->
         <div class="row">
             <?php foreach ($blogs as $blog) : ?>
                 <div class="col-8 mb-lg-5 mb-3">
                     <h4 name="title"><?= $blog['title'] ?></h4>
                     <!-- <p name="created_at" class='mb-1'>Ngày đăng: <?= $blog['created_at'] ?></p> -->
                     <div name="img" class="col-center mb_4">
                         <img src="<?= $blog['img'] ?>" class="img" alt="" style="width: 650px; height: 350px">
                     </div>
                     <!-- <p name="author" class='mb-1'>Tác giả: <?= $blog['author'] ?></p> -->
                     <p name="content" class="mt-4">
                         <?= $blog['content'] ?>
                     </p>
                 </div>
             <?php endforeach; ?>
         </div>
     </div>
 </div>