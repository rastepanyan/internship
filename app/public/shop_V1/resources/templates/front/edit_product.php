<form action="/shop_V1/resources/delete_add_remove.php" method="post">
    <input type="hidden" name="product_id" value="<?php echo $row['product_id']; ?>"/>
    <div class="card card-outline-secondary">
        <div class="card-header">
            <h5><strong>Edit Product</strong></h5>
        </div>
    <div class="card">
        <div class="card-body">
            <div class="col-md-5 mb-2">
                <div class="md-form">
                    <label for="title">Title:</label>
                    <input id="title" type="text" name="title" class="form-control"
                           value="<?php echo $row['title']; ?>">
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="col-md-3 mb-2">
                <div class="md-form">
                    <label for="price">Price:</label>
                    <input id="price" type="number" min="0" step="0.01" name="price" class="form-control"
                           value="<?php echo $row['price']; ?>">
                </div>
            </div>
        </div>
        <div class="card-body">
            <label class="col-md-12" for="short_description">Short Description:</label>
            <div class="col-md-10">
                <input type="text" name="short_description" value="<?php echo $row['short_description']; ?>" id="short_description"/>
            </div>
        </div>
            <div class="card-body">
                <label class="col-md-12" for="full_description">Full Description:</label>
                <div class="col-md-10">
                    <input type="text" name="full_description" value="<?php echo $row['full_description']; ?>" id="full_description"/>
                </div>
            </div>
        </div>
    <div class="card-body">
        <label class="col-md-4 control-label" for="images">Add Image:</label>
        <div class="col-md-4">
            <input id="images" name="images" class="input-file" type="file">
        </div>
    </div>
    <hr>
    <div class="card-body">
        <label class="col-md-4 control-label" for="submit"></label>
        <div class="col-md-4">
            <button type="submit" name="save_btn" class="btn btn-danger">Save</button>
            <a class="btn btn-info btn-md" href="../product_list.php">Back</a>
        </div>
    </div>
</form>
