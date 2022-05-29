<main>
    <div class="container">
        <h1 class="card-title mb-4"><?php echo "<span style=color:Green;><em><u>" . htmlspecialchars($product['title']) . "</u></em></span>"; ?></h1>
        <div class="row">
            <div class="col-7">
                <img src="<?php echo htmlspecialchars($product['img']); ?>" class="card-img-top" alt="...">
            </div>
            <div class="col-5">
                <p><?php echo "<span style=color:Green;><u>" . htmlspecialchars($product['description']) . "</span></u>"; ?></p>
                <p><?php echo "<span style=color:DarkRed;>Produced by: " . "<span style=color:BlueViolet;>" . htmlspecialchars($product['brand']); ?></p>
                <p><?php echo "<span style=color:DarkRed;>Price: " . "<span style=color:Red;>" .  $product['price']; ?></p>
                <p><?php if ($product['available'] == false) echo "<span style=color:red>Currently not available!</span>"; ?></p>
            </div>
        </div>
        <div class="row">
            <?php 
            foreach ($relatedProducts as $singleRelated) { ?>
            <article class="single-product col-4 row mb-5">
                <div class='col-6'>
                    <img src="<?php echo htmlspecialchars($singleRelated['img']); ?>" alt="" width="100" height="100">
                </div>
                <div class='col-6'>
                    <span><?php echo htmlspecialchars($singleRelated['title']); ?></span>
                    <a class="btn btn-success" href="./single-product-page.php?stranica=<?php echo htmlspecialchars($singleRelated['id']); ?>">Show Product</a>
                </div>
            </article>
            <?php } ?>
        </div>
    </div>
</main>