<div class="card card-outline-secondary">
    <div class="card-header">
        <h5><strong>Orders History</strong></h5>
    </div>
    <div class="card-body">
        <table class="table table-responsive w-100 d-block d-md-table">
            <thead class="thead-light">
            <tr>
                <th scope="col" class="text-uppercase small font-weight-bold">order id</th>
                <th scope="col" class="text-uppercase small font-weight-bold">name</th>
                <th scope="col" class="text-uppercase small font-weight-bold">order date</th>
                <th scope="col" class="text-uppercase small font-weight-bold">total amount</th>
                <th></th>
            </tr>
            </thead>
            <?php
            $result = $conn->query($sql);
            while ($row = $result->fetch_assoc()) {
            ?>
            <tbody>
            <tr>
                <th scope="row"><?php echo $row['order_id']; ?></th>
                <td><?php echo $row['names']; ?></td>
                <td><?php echo $row['order_date']; ?></td>
                <td>&#163;<?php echo $row['amount']; ?></td>
                <td>
                    <a class="btn btn-primary btn-sm" href="orders_single.php?id=<?php echo $row['order_id']; ?>">View</a>
                </td>
            </tr>
            <?php
            }
            ?>
            </tbody>
        </table>
        <hr>
        <div class="row w-100 d-block">
            <div class="col">
                <div class="btn-toolbar float-right">
                    <a href="index.php" class="btn btn-secondary btn-block">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>