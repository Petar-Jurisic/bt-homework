<?php


function getAllProducts() {
    $products = [
        [
            'id' => 1,
            'title' => "Turmeric powder",
            'description' => "The elaborate description of the item",
            'img' => "./public/theme/img/4b.jpg",
            'available' => true,
            'category' => 1,
            'price' => 71.95,
            'brand' => "AcmeCorp",

        ],
        [
            'id' => 2,
            'title' => "Garam masala",
            'description' => "The elaborate description of the item",
            'img' => "./public/theme/img/4b.jpg",
            'available' => true,
            'category' => 1,
            'price' => 162.95,
            'brand' => "AcmeCorp",
        ],
        [
            'id' => 3,
            'title' => "Aloe vera with Kesar and green tea",
            'description' => "The elaborate description of the item",
            'img' => "./public/theme/img/4b.jpg",
            'available' => false,
            'category' => 1,
            'price' => 249.95,
            'brand' => "AcmeCorp",
        ],
        [
            'id' => 4,
            'title' => "Premium tea",
            'description' => "The elaborate description of the item",
            'img' => "./public/theme/img/4b.jpg",
            'available' => true,
            'category' => 88,
            'price' => 219.95,
            'brand' => "MomCorp",
        ],
        [
            'id' => 5,
            'title' => "Herbal moisturizing lotion",
            'description' => "The elaborate description of the item",
            'img' => "./public/theme/img/4b.jpg",
            'available' => false,
            'category' => 1,
            'price' => 199.95,
            'brand' => "VeryBigCorp.ofAmerica",
        ],
        [
            'id' => 6,
            'title' => "Herbal facewash",
            'description' => "The elaborate description of the item",
            'img' => "./public/theme/img/4b.jpg",
            'available' => true,
            'category' => 1,
            'price' => 299.95,
            'brand' => "AcmeCorp",
        ],
        [
            'id' => 7,
            'title' => "Herbal shampoo",
            'description' => "The elaborate description of the item",
            'img' => "./public/theme/img/4b.jpg",
            'available' => true,
            'category' => 4,
            'price' => 259.95,
            'brand' => "AcmeCorp",
        ],
        [
            'id' => 8,
            'title' => "Joint pain oil",
            'description' => "The elaborate description of the item",
            'img' => "./public/theme/img/4b.jpg",
            'available' => false,
            'category' => 1,
            'price' => 171.95,
            'brand' => "MomCorp",
        ],
        [
            'id' => 9,
            'title' => "Herbal fairness cream",
            'description' => "The elaborate description of the item",
            'img' => "./public/theme/img/4b.jpg",
            'available' => true,
            'category' => 1,
            'price' => 201.95,
            'brand' => "AcmeCorp",
        ],
        [
            'id' => 10,
            'title' => "Body massage oil",
            'description' => "The elaborate description of the item",
            'img' => "./public/theme/img/4b.jpg",
            'available' => false,
            'category' => 1,
            'price' => 208.95,
            'brand' => "AcmeCorp",
        ],
        [
            'id' => 11,
            'title' => "Joint pain capsule",
            'description' => "The elaborate description of the item",
            'img' => "./public/theme/img/4b.jpg",
            'available' => true,
            'category' => 1,
            'price' => 98.95,
            'brand' => "VeryBigCorp.ofAmerica",
        ],
        [
            'id' => 12,
            'title' => "Garcinia cambogia",
            'description' => "The elaborate description of the item",
            'img' => "./public/theme/img/4b.jpg",
            'available' => true,
            'category' => 1,
            'price' => 198.95,
            'brand' => "AcmeCorp",
        ],
        [
            'id' => 13,
            'title' => "Herbal hair tonic",
            'description' => "The elaborate description of the item",
            'img' => "./public/theme/img/4b.jpg",
            'available' => true,
            'category' => 1,
            'price' => 158.95,
            'brand' => "MomCorp",
        ],
        [
            'id' => 14,
            'title' => "Diaba care",
            'description' => "The elaborate description of the item",
            'img' => "./public/theme/img/4b.jpg",
            'available' => true,
            'category' => 1,
            'price' => 123.95,
            'brand' => "AcmeCorp",
        ],
        [
            'id' => 15,
            'title' => "Green coffee",
            'description' => "The elaborate description of the item",
            'img' => "./public/theme/img/4b.jpg",
            'available' => true,
            'category' => 1,
            'price' => 427.95,
            'brand' => "AcmeCorp",
        ],
        [
            'id' => 16,
            'title' => "Brain and health booster",
            'description' => "The elaborate description of the item",
            'img' => "./public/theme/img/4b.jpg",
            'available' => true,
            'category' => 1,
            'price' => 829.95,
            'brand' => "AcmeCorp",
        ],
        [
            'id' => 17,
            'title' => "Supreme syrup",
            'description' => "The elaborate description of the item",
            'img' => "./public/theme/img/4b.jpg",
            'available' => true,
            'category' => 1,
            'price' => 459.95,
            'brand' => "VeryBigCorp.ofAmerica",
        ],
        [
            'id' => 18,
            'title' => "Amla tulsi syrup",
            'description' => "The elaborate description of the item",
            'img' => "./public/theme/img/4b.jpg",
            'available' => true,
            'category' => 1,
            'price' => 259.95,
            'brand' => "MomCorp",
        ],
        [
            'id' => 19,
            'title' => "Noni premium",
            'description' => "The elaborate description of the item",
            'img' => "./public/theme/img/4b.jpg",
            'available' => true,
            'category' => 1,
            'price' => 389.95,
            'brand' => "AcmeCorp",
        ],
        [
            'id' => 20,
            'title' => "Kids protein",
            'description' => "The elaborate description of the item",
            'img' => "./public/theme/img/4b.jpg",
            'available' => true,
            'category' => 1,
            'price' => 229.95,
            'brand' => "AcmeCorp",
        ],
        [
            'id' => 21,
            'title' => "Protein-rich powder",
            'description' => "The elaborate description of the item",
            'img' => "./public/theme/img/4b.jpg",
            'available' => true,
            'category' => 1,
            'price' => 679.95,
            'brand' => "AcmeCorp",
        ],
        [
            'id' => 22,
            'title' => "Balance nutrition",
            'description' => "The elaborate description of the item",
            'img' => "./public/theme/img/4b.jpg",
            'available' => true,
            'category' => 1,
            'price' => 429.95,
            'brand' => "MomCorp",
        ],
        [
            'id' => 23,
            'title' => "Boat shoe",
            'description' => "The elaborate description of the item",
            'img' => "./public/theme/img/4b.jpg",
            'available' => true,
            'category' => 1,
            'price' => 229.95,
            'brand' => "VeryBigCorp.ofAmerica",
        ],
        [
            'id' => 24,
            'title' => "Penny shoe",
            'description' => "The elaborate description of the item",
            'img' => "./public/theme/img/4b.jpg",
            'available' => true,
            'category' => 1,
            'price' => 229.95,
            'brand' => "AcmeCorp",
        ],
        [
            'id' => 25,
            'title' => "Personal essentials",
            'description' => "The elaborate description of the item",
            'img' => "./public/theme/img/4b.jpg",
            'available' => true,
            'category' => 1,
            'price' => 959.95,
            'brand' => "MomCorp",
        ]
    ];

    return $products;
}

function getAvailableProducts() {
    $allProducts = getAllProducts();
    $availabaleProducts = [];
    foreach ($allProducts as $product) {
        if($product['available'] == true) {
            $availabaleProducts[] = $product;}

    }
    return $availabaleProducts;
}

function filteredProducts($products, $term) {
    $filteredProducts = [];
    foreach ($products as $product) {
        if(str_contains($product['title'], $term) || str_contains($product['brand'], $term)) {
            $filteredProducts[] = $product;
        }
        else if(str_contains($product['id'], $term)) {
            $filteredProducts[] = $product;
        }
    }

    return $filteredProducts;
}

function getOneProductById($id) {
    $products = getAvailableProducts();
    foreach ($products as $product) {
        if($product['id'] == $id) {
            return $product;
        }
    }
}

function getRelatedProducs($mainProduct) {
    $related = [];
    $products = getAvailableProducts();
    foreach ($products as  $product) {
        if($product['category'] == $mainProduct['category'] && $mainProduct['id'] != $product['id']) {
            $related[] = $product;
            if(count($related) >= 3) {
                break;
            }
        }
    }
    return $related;
}

function addToCart($products) {
    $cart = [];
    foreach ($products as $product) {
        if(isset($_POST['addToCart'])) {
    $cart = $cart + $product; 
        }
    }
    return $cart;
}