<div class="card card-outline-secondary">
    <div class="card-header">
        <h5><strong>Order History</strong></h5>
    </div>
    <div class="card-body">
        <table class="table table-responsive w-100 d-block d-md-table">
            <thead class="thead-light">
            <tr>
                <th scope="col" class="text-uppercase small font-weight-bold">order id</th>
                <th scope="col" class="text-uppercase small font-weight-bold">position</th>
                <th scope="col" class="text-uppercase small font-weight-bold">product id</th>
                <th scope="col" class="text-uppercase small font-weight-bold">quantity</th>
                <th scope="col" class="text-uppercase small font-weight-bold">item price</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $result = $conn->query($sql);
            while ($row = $result->fetch_assoc()) {
                echo '<tr>';
                echo '<th scope="row">' . $row['order_id'] . '</th><td>' . $row['positions'] . '</td><td>' . $row['product_id'] . '</td><td>' . $row['quantity'] . '</td><td>' . "&#163;" . $row['item_price'] . '</td>';
                echo '</tr>';
            }
            ?>
            </tbody>
        </table>
    </div>
</div>
