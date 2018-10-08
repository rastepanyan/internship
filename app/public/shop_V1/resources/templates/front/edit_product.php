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
            <label class="col-md-10 control-label" for="short_description">Short Description:</label>
            <div class="col-md-10">
                <textarea class="form-control" id="short_description" name="short_description"></textarea>
            </div>
        </div>
            <div class="card-body">
                <label class="col-md-10 control-label" for="full_description">Full Description:</label>
                <div class="col-md-10">
                    <textarea class="form-control" id="full_description" name="full_description"></textarea>
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
            <input class="btn btn-danger btn-md" type="submit" value="Save">
            <a class="btn btn-info btn-md" href="../product_list.php">Back</a>
        </div>
    </div>
</form>
