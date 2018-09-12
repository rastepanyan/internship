<div class="card">
    <div class="card-header">
        <h5><strong>ADD PRODUCT</strong></h5>
    </div>
    <div class="card-body">
        <div class="col-md-5 mb-2">
            <div class="md-form">
                <label for="title">Title:</label>
                <input id="title" type="text" name="title" placeholder="" class="form-control" required>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="col-md-3 mb-2">
            <div class="md-form">
                <label for="price">Price:</label>
                <input id="price" type="text" name="price" placeholder="" class="form-control" required>
            </div>
        </div>
    </div>
    <div class="card-body">
        <label class="col-md-10 control-label" for="description">Description:</label>
        <div class="col-md-10">
            <textarea class="form-control" id="description" name="description" placeholder=""></textarea>
        </div>
    </div>
    <div class="card-body">
        <label class="col-md-4 control-label" for="product_id">Product Code:</label>
        <div class="col-md-4">
            <input id="product_id" type="text" name="product_id" placeholder="" class="form-control" required>
        </div>
    </div>
    <div class="card-body">
        <label class="col-md-2 control-label" for="quantity">Quantity:</label>
        <div class="col-md-2">
            <input id="quantity" type="text" name="quantity" placeholder="" class="form-control" required>
        </div>
    </div>
    <div class="card-body">
        <label class="col-md-4 control-label" for="discount">Discount:</label>
        <div class="col-md-4">
            <input id="discount" type="text" name="discount" placeholder="" class="form-control" required>
        </div>
    </div>
    <div class="card-body">
        <label class="col-md-3 control-label" for="warranty">Warranty:</label>
        <div class="col-md-3">
            <input id="warranty" type="text" name="warranty" placeholder="" class="form-control" required>
        </div>
    </div>
    <div class="card-body">
        <label class="col-md-4 control-label" for="add_image">Add Image:</label>
        <div class="col-md-4">
            <input id="add_image" name="add_image" class="input-file" type="file">
        </div>
    </div>
    <div class="card-body">
        <label class="col-md-4 control-label" for="submit"></label>
        <div class="col-md-4">
            <a class="btn btn-danger btn-md" href="#">Save</a>
            <a class="btn btn-info btn-md" href="../product_list.html">Back</a>
        </div>
    </div>
</div>