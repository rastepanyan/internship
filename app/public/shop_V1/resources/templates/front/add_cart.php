<form class="form-group" action="/shop_V1/resources/delete_add_remove.php" method="post" enctype="multipart/form-data">
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
                        <th scope="col" class="text-uppercase small font-weight-bold">amount</th>
                        <th scope="col" class="text-uppercase small font-weight-bold">action</th>
                        <th></th>
                    </tr>
                    </thead>
                    <?php
                    if (!empty($_SESSION['cart'])) {
                        $total_amount = 0;
                        foreach ($_SESSION['cart'] as $keys => $values) {
                            ?>
                            <tbody>
                            <tr>
                                <th scope="row" data-th="#"><?php echo $values['position']; ?></th>
                                <td data-th="Product"><?php echo $values['title']; ?></td>
                                <td data-th="Price">&#163;<?php echo $values['price']; ?></td>
                                <td data-th="Quantity"><?php echo $values['quantity']; ?></td>
                                <td data-th="Amount">
                                    &#163;<?php echo number_format($values['quantity'] * $values['price'], 2); ?></td>
                                <td class="actions">
                                    <button type="submit" name="remove_from_cart_btn" class="btn btn-danger btn-block">Remove</button>
                                </td>
                            </tr>
                            </tbody>
                            <?php
                            $total_amount = $total_amount + ($values["quantity"] * $values["price"]);
                        }
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
                            <a class="hidden-xs text-center"><strong>Total Amount:<br>
                                    <p class="text-center">&#163;<?php echo number_format($total_amount, 2); ?></p></strong></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
