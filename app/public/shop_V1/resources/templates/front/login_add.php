<form class="form-group" action="/shop_V1/login_complete.php" method="post" enctype="multipart/form-data">
    <?php echo display_error($errors); ?>
    <div class="card-body text-center">
        <div class="col-md-6 mb-2">
            <div class="md-form">
                <label for="username"><strong>Username:&emsp;</strong></label>
                <input type="text" name="username" class="form-control" required>
            </div>
        </div>
        <div class="col-md-6 mb-2">
            <div class="md-form">
                <label for="password"><strong>Password:&emsp;</strong></label>
                <input type="text" name="password" class="form-control" required>
            </div>
        </div>
    </div>
    <hr>
    <div class="text-center">
        <button type="submit" name="login_btn" class="btn btn-primary">Login</button>
    </div>
</form>
