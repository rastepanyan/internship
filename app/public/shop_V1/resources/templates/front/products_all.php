<div class="col-lg-4 col-md-6 mb-4">
    <div class="card h-100">
        <a href="products_single.php?id=<?php echo $row['product_id']; ?>"><img class="card-img-top" src="img/<?php echo $row['images']; ?>" alt=""></a>
        <div class="card-body">
            <h4 class="card-title">
                <a href="products_single.php?id=<?php echo $row['product_id']; ?>"><?php echo $row['title']; ?></a>
            </h4>
            <h5>&#163;<?php echo $row['price']; ?></h5>
            <p class="card-text"><?php echo $row['description']; ?></p>
        </div>
        <div class="card-footer">
            <small class="text-muted"></small>
        </div>
    </div>
</div>