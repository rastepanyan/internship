<?php
$sql = "SELECT * FROM products INNER JOIN orderlines USING(product_id) ORDER BY product_id ASC";
$result = $conn->query($sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = $result->fetch_array()) {
        ?>
        <form class="form-group" action="/shop_V1/resources/add_to_cart.php" method="post"
              enctype="multipart/form-data">
            <input type="hidden" name="product_id" value="<?php echo $row['product_id']; ?>"/>
            <div class="col-lg-12">
                <div class="card card-outline-secondary">
                    <div class="card-header">
                        <h5><strong>Your Cart</strong></h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-responsive w-100 d-block d-md-table">
                            <thead class="thead-light">
                            <tr>
                                <th scope="col" class="text-uppercase small font-weight-bold">#</th>
                                <th scope="col" class="text-uppercase small font-weight-bold">product</th>
                                <th scope="col" class="text-uppercase small font-weight-bold">price</th>
                                <th scope="col" class="text-uppercase small font-weight-bold">quantity</th>
                                <th></th>
                            </tr>
                            </thead>
                            <?php
                            if (!empty($_SESSION["cart"]))
                            {
                            $total = 0;
                            foreach ($_SESSION["cart"] as $keys => $values) {
                                ?>
                                <tbody>
                                <tr>
                                    <th scope="row" data-th="#"><?php echo $row['positions']; ?></th>
                                    <td data-th="Product"><?php echo $row['title']; ?></td>
                                    <td data-th="Price">&#163;<?php echo $row['price']; ?></td>
                                    <td data-th="Quantity"><?php echo $row['quantity']; ?></td>
                                    <td class="actions">
                                        <a class="btn btn-danger btn-sm"
                                           href="index.php?action=delete&id=<?php echo $values['product_id']; ?>">Remove</a>
                                    </td>
                                </tr>
                                </tbody>
                                <?php
                            }
                            ?>
                        </table>
                        <hr>
                        <div class="row w-100 d-block">
                            <div class="col">
                                <div class="float-left">
                                    <a class="btn btn-primary btn-block" href="checkout.php">Go to Checkout</a>
                                    <a class="btn btn-secondary btn-block" href="order_list.php">Back</a>
                                </div>
                                <div class="float-right">
                                    <?php
                                    $total_amount = $total_amount + ($row["quantity"] * $row["price"]);
                                    }
                                    ?>
                                    <a class="hidden-xs text-center"><strong>Total Amount:<br>
                                            <p class="text-center">&#163;<?php echo number_format($total_amount, 2); ?></p></strong></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <?php
    }
}
?>