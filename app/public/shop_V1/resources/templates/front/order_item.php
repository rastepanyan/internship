<div class="card card-outline-secondary">
    <div class="card-header">
        <h5><strong>Order</strong></h5>
    </div>
    <div class="card-body">
        <table class="table table-responsive w-100 d-block d-md-table">
            <thead class="thead-light">
            <tr>
                <th scope="col" class="text-uppercase small font-weight-bold">order id</th>
                <th scope="col" class="text-uppercase small font-weight-bold">position</th>
                <th scope="col" class="text-uppercase small font-weight-bold">product</th>
                <th scope="col" class="text-uppercase small font-weight-bold">item price</th>
                <th scope="col" class="text-uppercase small font-weight-bold">quantity</th>
            </tr>
            </thead>
            <?php
            $result = $conn->query($sql);
            while ($row = $result->fetch_assoc()) {
            ?>
            <tbody>
            <tr>
                <th scope="row"><?php echo $row['order_id']; ?></th>
                <td><?php echo $row['position']; ?></td>
                <td><?php echo $row['title']; ?></td>
                <td>&#163;<?php echo $row['item_price']; ?></td>
                <td><?php echo $row['quantity']; ?></td>
            </tr>
            <?php
            }
            ?>
            </tbody>
        </table>
        <hr>
        <div class="row w-100 d-block">
            <div class="col">
                <div class="float-left">
                    <a href="order_list.php" class="btn btn-primary btn-block">Back</a>
                </div>
                <div class="float-right">
                    <?php
                    $result = $conn->query("SELECT amount FROM orders WHERE order_id = " . $_GET['id']);
                    while ($row = $result->fetch_assoc()) {
                        ?>
                        <a class="hidden-xs text-center">
                            <strong>Amount:<br>
                                <p class="text-center">&#163;<?php echo $row['amount']; ?></p>
                            </strong>
                        </a>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
