<form class="form-group" action="/shop_V1/resources/login_complete.php" method="post" enctype="multipart/form-data">
    <class="content">
    <div class="card-body text-center">
        <div class="col-md-6 mb-2">
            <div class="md-form">
                <label for="username"><strong>Username:</strong></label>
                <input type="text" name="username" class="form-control" required>
            </div>
        </div>
        <div class="col-md-6 mb-2">
            <div class="md-form">
                <label for="password"><strong>Password:</strong></label>
                <input type="password" name="password" class="form-control" required>
            </div>
        </div>
    </div>
    <h2><strong><?php display_error(); ?></strong></h2>
<hr>
<div class="text-center">
    <button type="submit" name="login_btn" class="btn btn-primary">Login</button>
</div>
</div>
</form>
