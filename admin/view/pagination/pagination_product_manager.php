<nav class=" mb-4" aria-label="Page navigation example" style="display: flex; justify-content:center" ;>
    <ul class="pagination justify-content-center">
        <?php
        extract($_REQUEST);
        $products_per_page = 10;
        if (!isset($num_page)) {
            $num_page = 1;
        }
        foreach (admin_count_products() as $value) {
            $all_products = $value[0];
        }
        $max_page = ceil($all_products / $products_per_page);
        $prev = $num_page - 1;
        $next = $num_page + 1;
        if ($num_page == 1) {
            echo "
            <li class='page-item disabled'>
            <a class='page-link' href='index.php?page=admin_default&num_page=$prev'>Previous</a>
          </li>
            ";
        } else {
            echo "
            <li class='page-item'>
            <a class='page-link' href='index.php?page=admin_default&num_page=$prev'>Previous</a>
          </li>
            ";
        }
        for ($i = 1; $i <= $max_page; $i++) {
            if ($i == $num_page) {
                echo "
                    <li 'class='page-item '><a class='page-link active' href='index.php?page=admin_default&num_page=$i'>$i</a></li>";
            } else {
                echo "
                    <li style='color:#e1b788;' class='page-item'><a class='page-link' href='index.php?page=admin_default&num_page=$i'>$i</a></li>";
            }
        }
        if ($num_page == $max_page) {
            echo "
                <li class='page-item disabled'>
                <a 'class='page-link' href='index.php?page=admin_default&num_page=$next'>Next</a>
              </li>
                ";
        } else {
            echo "
                <li class='page-item'>
                <a style='color:#e1b788;' class='page-link' href='index.php?page=admin_default&num_page=$next'>Next</a>
              </li>
                ";
        }
        ?>
    </ul>
</nav>