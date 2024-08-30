<div class="container-xxl py-5">
    <h3 class="display-5 mb-4 mt-4 container text-title " style="font-size:30px;">
        Bài viết
    </h3>
    <div class="container">
        <!-- tittle heading -->
        <div class="row">
            <?php foreach ($blogs as $blog) : ?>
                <div class="col-lg-4 mb-4">
                    <img src="<?= $blog['img'] ?>" class="img" alt="" style="width: 250px; height: 150px;border-radius:4px;">
                </div>
                <div class="col-lg-8 mb_2">
                    <h5 class="text-title"><?= $blog['title'] ?></h5>
                    <p class='mb-1'>Tác giả: <?= $blog['author'] ?></p>
                    <!-- <p class="mb-1">
                    <?= $blog['content'] ?>
                    </p> -->
                    <p class='mb-1'>Ngày đăng: <?= $blog['created_at'] ?></p>
                    <div class='mb-1'>
                        <div class='col-2 ban-buttons'>
                            <a class='btn_edit_shop_detail btn px-4 detail' href='index.php?page=blog_detail&blog_id=<?= $blog['id'] ?> ' style='border-radius:4px;'>Đọc thêm</a>
                        </div>
                    </div>
                </div>
                <hr>
            <?php endforeach; ?>
        </div>
    </div>
</div>