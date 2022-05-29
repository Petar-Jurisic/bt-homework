<main>
    <div class="container">
        <form class="row" action="./all-products-page.php" method="post" style="margin-bottom: 10px;">
            <select name="sort-by" name="sort-by" class="col-3">
                <option value="">None</option>
                <option value="price-asc">By price asc</option>
                <option value="price-desc">By price desc</option>
            </select>
            <input class="col-7" type="text" name="filter">
            <button type="submit" class="btn btn-warning col-2">Search</button>
        </form>
        <div class="row">
            <?php foreach ($products as $product) { ?>
            <article class="single-product col-4 row mb-5" style="border-left: 1px solid DarkOrchid;">
                <div class='col-6'>
                    <img src="<?php echo htmlspecialchars($product['img']); ?>" alt="" width="100" height="100">
                </div>
                <div class='col-6'>
                    <span style="color:DarkCyan; font-family: Arial, Helvetica, sans-serif;"><?php echo htmlspecialchars($product['title']); ?></span>
                    <a class="btn btn-success" href="./single-product-page.php?stranica=<?php echo htmlspecialchars($product['id']) ?>">Show Product</a>
                    <a style=background-color:#e9ceba; class="btn" 
                    <?php

                    if(isset($_POST['addToCart'])) {
                        echo "Item added to cart";
                    } 
                    echo htmlspecialchars($product['id']) 
                    ?>>Add to cart</a>
                </div>
                <div class='col-6'>
                    <span style="color:DarkSalmon; font-family: Arial, Helvetica, sans-serif;"><?php echo "Price: " . htmlspecialchars($product['price']); ?></span>
                </div>
            </article>
            <?php } ?>
        </div>
    </div>
</main>