<form class="form-group text-center" action="/shop_V1/registration_complete.php" method="post" enctype="multipart/form-data">
    <?php echo display_error($errors); ?>
    <div class="card-body">
        <div class="px-lg-5 pt-0">
            <div class="row">
                <div class="col-md-6 mb-2">
                    <div class="md-form">
                        <label><strong>First Name:</strong></label>
                        <input type="text" name="first_name" class="form-control" value="<?php echo $first_name; ?>" required>
                    </div>
                </div>
                <div class="col-md-6 mb-2">
                    <div class="md-form">
                        <label><strong>Last Name:</strong></label>
                        <input type="text" name="last_name" class="form-control" value="<?php echo $last_name; ?>" required>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="px-lg-5 pt-0">
            <div class="row">
                <div class="col-md-6 mb-2">
                    <div class="md-form">
                        <label><strong>&emsp;Address:&emsp;</strong></label>
                        <input type="text" name="address" class="form-control" value="<?php echo $address; ?>"required>
                    </div>
                </div>
                <div class="col-md-6 mb-2">
                    <div class="md-form">
                        <label><strong>Post Code:</strong></label>
                        <input type="text" name="post_code" class="form-control" value="<?php echo $post_code; ?>" required>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="px-lg-5 pt-0">
            <div class="row">
                <div class="col-md-6 mb-2">
                    <div class="md-form">
                        <label><strong>&emsp;&emsp;City:&emsp;&emsp;</strong></label>
                        <input type="text" name="city" class="form-control" value="<?php echo $city; ?>" required>
                    </div>
                </div>
                <div class="col-md-6 mb-2">
                    <div class="md-form">
                        <label><strong>Country Code:</strong></label>
                        <input type="text" name="country_code" class="form-control" value="<?php echo $country_code; ?>" required>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="px-lg-5 pt-0">
            <div class="row">
                <div class="col-md-6 mb-2">
                    <div class="md-form">
                        <label><strong>User Name:</strong></label>
                        <input type="text" name="username" class="form-control" value="<?php echo $username; ?>" required>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="px-lg-5 pt-0">
            <div class="row">
                <div class="col-md-6 mb-2">
                    <div class="md-form">
                        <label><strong>Password:</strong></label>
                        <input type="password" name="password_1" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-6 mb-2">
                    <div class="md-form">
                        <label><strong>Confirm Password:</strong></label>
                        <input type="password" name="password_2" class="form-control" required>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="card-body">
        <button type="submit" class="btn btn-primary" name="register_btn">Register</button>
    </div>
</form>

