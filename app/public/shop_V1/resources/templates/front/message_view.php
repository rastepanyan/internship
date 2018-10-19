<form class="form-group" action="/shop_V1/resources/delete_message.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="message_id" value="<?php echo $row['message_id']; ?>"/>
    <div class="card card-outline-secondary">
        <div class="card-body">
            <table class="table table-responsive w-100 d-block d-md-table">
                <thead class="thead-light">
                <tr>
                    <th scope="col" class="text-uppercase small font-weight-bold">#</th>
                    <th scope="col" class="text-uppercase small font-weight-bold">from</th>
                    <th scope="col" class="text-uppercase small font-weight-bold">email</th>
                    <th scope="col" class="text-uppercase small font-weight-bold">subject</th>
                    <th scope="col" class="text-uppercase small font-weight-bold">view</th>
                    <th scope="col" class="text-uppercase small font-weight-bold">action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $result = $conn->query($sql);
                while ($row = $result->fetch_assoc()) {
                    ?>
                    <tr>
                        <th scope="row"><?php echo $row['message_id']; ?> </th>
                        <td><?php echo $row['from_name']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo  $row['subject']; ?></td>
                        <td><a class="btn btn-info btn-sm" href="read_message.php?id=<?php echo $row['message_id'];  ?>">View</a></td>
                        <td><button type="submit" name="remove_message_btn" class="btn btn-danger btn-sm">Remove</button></td>
                     </tr>
                <?php
                    }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</form>
<div class="card-body">
    <div class="col-md-4">
        <a class="btn btn-primary btn-md" href="index.php">Back</a>
    </div>
</div>
