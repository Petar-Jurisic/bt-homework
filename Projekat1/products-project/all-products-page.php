<?php

require_once __DIR__ . "/models/products-model.php";

$filter = "";
$sort = "";
if(!empty($_POST['filter'])) {
    $filter = $_POST['filter'];
}

$products = getAvailableProducts();

if($filter != "") {
    $products = filteredProducts($products, $filter);
}

/*switch ($_POST['sort-by']) {
    case 'price-asc':
    $products = sort($products);
    case 'price-desc': 
    $products = rsort($products);
    }
*/

require __DIR__ . "/views/_layout/v-header.php";

// PAGE
require __DIR__ . "/views/v-products.php";

// FOOTER
require __DIR__ . "/views/_layout/v-footer.php";