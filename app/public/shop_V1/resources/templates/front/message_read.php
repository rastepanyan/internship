<div class="card card-outline-secondary">
    <div class="card-body">
        <table class="table table-responsive w-100 d-block d-md-table">
            <thead class="thead-light">
            <tr>
                <th scope="col" class="text-uppercase small font-weight-bold">#</th>
                <th scope="col" class="text-uppercase small font-weight-bold">from</th>
                <th scope="col" class="text-uppercase small font-weight-bold">message</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $result = $conn->query($sql);
            while ($row = $result->fetch_assoc()) {
                ?>
                <tr>
                    <th scope="row"><?php echo $row['message_id']; ?></th>
                    <td><?php echo $row['from_name']; ?></td>
                    <td><?php echo $row['the_message']; ?></td>
                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
    </div>
</div>
<div class="card-body">
    <div class="col-md-4">
        <a class="btn btn-primary btn-md" href="messages.php">Back</a>
    </div>
</div>
