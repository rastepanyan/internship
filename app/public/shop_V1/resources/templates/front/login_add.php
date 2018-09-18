<form class="form-group text-center" action="/shop_V1/login_complete.php" method="post" enctype="multipart/form-data">
    <div class="card-body">
        <div class="col-md-6 mb-2">
            <div class="md-form">
                <label for=""><strong>Username:&emsp;</strong></label>
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
    <div class="card-body">
        <button type="submit" class="btn btn-primary" name="login_btn">Login</button>
    </div>
</form>
