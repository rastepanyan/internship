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
        <tbody>
        <tr>
            <th scope="row"><?php echo $row['order_id']; ?></th>
            <td><?php echo $row['names']; ?></td>
            <td><?php echo $row['order_date']; ?></td>
            <td>&#163;<?php echo $row['amount']; ?></td>
            <td>
                <a class="btn btn-primary btn-sm" href="orders_single.php?id=<?php echo $row['order_id']; ?>">View</a>
            </td>
            <hr>
        </tr>
        </tbody>
    </table>
</div>

