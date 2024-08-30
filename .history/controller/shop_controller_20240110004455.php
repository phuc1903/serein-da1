<?php
include_once "../model/shop_model.php";
include_once "../model/category_model.php";

extract($_REQUEST);
if (isset($keyword)) {
    $search_results = search($keyword);
    $categories = get_categories();
    include_once "../site/view/layouts/header.php";
    include_once "../site/view/shop.php";
    include_once "../site/view/search_filter_results/search.php";
    include_once "../site/view/layouts/footer.php";
} else {
    switch ($act) {
        case 'search':
            $search_results = search_by_category($category);
            $categories = get_categories();
            include_once "../site/view/layouts/header.php";
            include_once "../site/view/shop.php";
            include_once "../site/view/search_filter_results/search_by_category.php";
            include_once "../site/view/layouts/footer.php";
            break;
        case 'filter':
            $search_results = search_by_price($min, $max);
            $categories = get_categories();
            include_once "../site/view/layouts/header.php";
            include_once "../site/view/shop.php";
            include_once "../site/view/search_filter_results/filter_by_price.php";
            include_once "../site/view/layouts/footer.php";
            break;
    }
}
