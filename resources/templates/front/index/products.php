<?php 
$result = get_products();

while ($row = fetch_array($result)) {
    $product = <<<DELIMETER

        <div class="col-sm-4 col-lg-4 col-md-4">
            <div class="thumbnail">
                <img src="http://placehold.it/320x150" alt="">
                <div class="caption">
                    <h4 class="pull-right">{$row['product_price']}</h4>
                    <h4><a href="product.html">{$row['product_title']}</a>
                    </h4>
                    <p>See more snippets like this online store item at <a target="_blank" href="http://www.bootsnipp.com">Bootsnipp - http://bootsnipp.com</a>.</p>
                    <a class="btn btn-primary" target="_blank" href="http://maxoffsky.com/code-blog/laravel-shop-tutorial-1-building-a-review-system/">View
                        Add to Cart</a>
                </div>
            </div>
        </div>

    DELIMETER;

    echo $product;

}

?>