<form action="/shop_V1/resources/send_data.php" method="post">
    <div class="card">
        <div class="card-body">
            <div class="col-md-5 mb-2">
                <div class="md-form">
                    <label for="title">Title:</label>
                    <input id="title" type="text" name="title" class="form-control" required>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="col-md-3 mb-2">
                <div class="md-form">
                    <label for="price">Price:</label>
                    <input id="price" type="number" min="0" step="0.01" name="price" class="form-control" required>
                </div>
            </div>
        </div>
        <div class="card-body">
            <label class="col-md-10 control-label" for="description">Description:</label>
            <div class="col-md-10">
                <textarea class="form-control" id="description" name="description"></textarea>
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
            <a class="btn btn-info btn-md" href="./product_list.php">Back</a>
        </div>
    </div>
    </div>
</form>
