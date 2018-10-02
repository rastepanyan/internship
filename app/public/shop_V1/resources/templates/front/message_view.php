<form class="form-group" action="/shop_V1/resources/delete_message.php" method="post" enctype="multipart/form-data">
    <div class="card card-outline-secondary">
        <div class="card-body">
            <table class="table table-responsive w-100 d-block d-md-table">
                <thead class="thead-light">
                <tr>
                    <th scope="col" class="text-uppercase small font-weight-bold">#</th>
                    <th scope="col" class="text-uppercase small font-weight-bold">from</th>
                    <th scope="col" class="text-uppercase small font-weight-bold">email</th>
                    <th scope="col" class="text-uppercase small font-weight-bold">message</th>
                    <th scope="col" class="text-uppercase small font-weight-bold"></th>
                    <th scope="col" class="text-uppercase small font-weight-bold"></th>
                </tr>
                </thead>
                <tbody>
                <?php
                $result = $conn->query($sql);
                while ($row = $result->fetch_assoc()) {
                    echo '<tr>';
                    echo '<th scope="row">' . $row['message_id'] . '</th>
                        <td>' . $row['from_name'] . '</td>
                        <td>' . $row['email'] . '</td>
                        <td>' . $row['the_message'] . '</td>
                        <td>' . '<button type="submit" name="view_message_btn" class="btn btn-info btn-sm">View</button>' . '</td>
                        <td>' . '<button type="submit" name="delete_message_btn" class="btn btn-danger btn-sm">Remove</button>' . '</td>';
                    echo '</tr>';
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</form>
<div class="card-body">
    <div class="col-md-4">
        <a class="btn btn-primary btn-md" href="./index.php">Back</a>
    </div>
</div>

