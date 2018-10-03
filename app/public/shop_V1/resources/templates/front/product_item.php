<form class="form-group" action="/shop_V1/resources/delete_add_remove.php" method="post" enctype="multipart/form-data">
    <div class="card">
        <img class="card-img-top img-fluid" src="img/<?php echo $row['images']; ?>" alt="">
        <div class="card-body">
            <h3 class="card-title"><strong><?php echo $row['title']; ?></strong></h3>
            <h4>&#163;<?php echo $row['price']; ?></h4>
            <p class="card-text text-justify">
                <i>
                    <?php echo $row['full_description']; ?>
                </i>
            </p>
        </div>
    </div>
    <div class="card card-outline-secondary my-4">
        <div class="card-header">
            <h5>Place Order</h5>
        </div>
        <div class="card-body">
            <p>Quantity:</p>
            <small class="text-muted">
                <input name="quantity" type="number" min="1" class="input-sm text-center" value="1">
            </small>
            <input type="hidden" name="product_id" value="<?php echo $row['product_id']; ?>"/>
            <input type="hidden" name="hidden_title" value="<?php echo $row['title']; ?>" />
            <input type="hidden" name="hidden_price" value="<?php echo $row['price']; ?>" />
            <hr>
            <div class="row w-100 d-block">
                <div class="col">
                    <?php
                    if (is_admin()) {
                        ?>
                        <div class="float-left">
                            <button type="submit" name="delete_btn" class="btn btn-danger btn-block">Delete</button>
                        </div>
                        <div class="float-right">
                            <a href="./product_list.php" class="btn btn-primary btn-block">Cancel</a>
                        </div>
                        <?php
                    } else {
                        ?>
                        <div class="float-left">
                            <button type="submit" name="add_to_cart_btn" class="btn btn-info btn-block">Add to Cart</button>
                        </div>
                        <div class="float-right">
                            <a href="./product_list.php" class="btn btn-primary btn-block">Cancel</a>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</form>
