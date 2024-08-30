<h3 class=" mb-4 mt-4 container text-title " style="font-size:30px;">
    Bình luận về sản phẩm
</h3>
<div class="card container">
    <div class="card-body">
        <?php
        if (empty($comments)) {
            echo "<h3 class='text-center'>Sản phẩm chưa có bình luận nào!</>";
        }
        foreach ($comments as $cmt) {
            $avatar = $cmt['img'];
            $date_time = $cmt['posted_at'];
            $content = $cmt['content'];
            $user_name = $cmt['user_name'];
            echo "
                <div class='d-flex flex-start align-items-center'>
                <img class='rounded-circle shadow-1-strong me-3' src='$avatar' alt='avatar' width='60' height='60' />
                <div>
                    <h6 class='fw-bold text-title mb-1'>$user_name</h6>
                    <p class='text-muted small mb-0'>
                        $date_time
                    </p>
                </div>
            </div>
            <p class='mt-3 mb-4 pb-2'>$content</p>
            <div class='small d-flex justify-content-start mb-4'>
                <a href='#!' class='d-flex align-items-center me-3 text-title'>
                    <i class='far fa-thumbs-up me-2'></i>
                    <p class='mb-0 '>Like</p>
                </a>
                <a href='#!' class='d-flex align-items-center me-3 text-title'>
                    <i class='far fa-comment-dots me-2 '></i>
                    <p class='mb-0 text-title'>Comment</p>
                </a>
                <a href='#!' class='d-flex align-items-center me-3 text-title'>
                    <i class='fas fa-share me-2'></i>
                    <p class='mb-0'>Share</p>
                </a>
            </div>";
        }
        ?>
    </div>
    <div class="card-footer py-3 border-0" style="background-color: #f8f9fa;">
        <form action="../controller/post_comment.php" method="POST">
            <div class="d-flex flex-start w-100">
                <img class="rounded-circle shadow-1-strong me-3" src="<?= isset($_COOKIE['user_id']) ? $_COOKIE['img'] : '../assets/upload/default_avatar.jpg' ?>" alt="avatar" width="40" height="40" />
                <div class="form-outline w-100">
                    <textarea name="comment_content" class="form-control" id="textAreaExample" rows="4" style="background: #fff;"></textarea>
                    <input type="text" name="product_id" hidden value="<?= $product_id ?>">
                    <input type="text" name="id_category" hidden value="<?= $id_category ?>">
                    <label class="form-label" for="textAreaExample">Để lại ý kiến của bạn</label>
                </div>
            </div>
            <div class="float-end mt-2 pt-1">
                <button type="submit" name="post_comment" class="btn cart_btn btn-sm">Đăng</button>
            </div>
        </form>
    </div>
</div>