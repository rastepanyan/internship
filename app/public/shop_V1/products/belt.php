<div class="col-lg-9">
    <div class="card">
        <img class="card-img-top img-fluid" src="../img/<?php echo $row['images']; ?>" alt="">
        <div class="card-body">
            <h3 class="card-title"><strong><?php echo $row['title']; ?></strong></h3>
            <h4>&#163;<?php echo $row['price']; ?></h4>
            <p class="card-text text-justify">
                <i><?php echo $row['description']; ?></i>
            </p>
        </div>
    </div>
    <div class="card card-outline-secondary my-4">
        <div class="card-header">
            <h5>Place Order</h5>
        </div>
        <div class="card-body">
            <p>Product Code: 2231H01PBRI</p>
            <small class="text-muted">Warranty: 1 Year</small>
            <br>
            <small class="text-muted">Quantity: 65</small>
            <br>
            <hr>
            <div class="row w-100 d-block">
                <div class="col">
                    <div class="float-left">
                        <a href="../cart.html" class="btn btn-primary btn-lg">Add to Cart</a>
                    </div>
                    <div class="float-right">
                        <a href="../add/add_belt.html" class="btn btn-info btn-sm">Edit</a>
                        <a href="" class="btn btn-danger btn-sm">Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>