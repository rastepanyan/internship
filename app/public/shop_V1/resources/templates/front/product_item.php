<div class="card">
    <img class="card-img-top img-fluid" src="img/<?php echo $row['images']; ?>" alt="">
    <div class="card-body">
        <h3 class="card-title"><strong><?php echo $row['title']; ?></strong></h3>
        <h4>&#163;<?php echo $row['price']; ?></h4>
        <p class="card-text text-justify">
            <i>
                <?php echo $row['description']; ?>
            </i>
        </p>
    </div>
</div>
<div class="card card-outline-secondary my-4">
    <div class="card-header">
        <h5>Place Order</h5>
    </div>
    <div class="card-body">
        <p>Product Code: 023H01USREI</p>
        <small class="text-muted">Warranty: 30 Days</small>
        <br>
        <small class="text-muted">Quantity: 54</small>
        <br>
        <hr>
        <div class="row w-100 d-block">
            <div class="col">
                <div class="float-left">
                    <a href="../cart.php" class="btn btn-primary btn-block">Add to Cart</a>
                    <a href="../product_list.php" class="btn btn-primary btn-block">Cancel</a>
                </div>
                <div class="float-right">
                    <a href="../add/add_dresses.html" class="btn btn-info btn-block">Edit</a>
                    <a href="#" class="btn btn-danger btn-block">Delete</a>
                </div>
            </div>
        </div>
    </div>
</div>

