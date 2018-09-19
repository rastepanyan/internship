<form action="/shop_V1/resources/send_message.php" method="post">
    <div class="card">
        <div class="card-body">
            <div class="col-md-5 mb-2">
                <div class="md-form">
                    <label for="your_name">Your Name:</label>
                    <input id="your_name" type="text" name="your_name" class="form-control" required>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="col-md-4 mb-2">
                <div class="md-form">
                    <label for="email">Email:</label>
                    <input id="email" type="text" name="email" class="form-control" required>
                </div>
            </div>
        </div>
        <div class="card-body">
            <label class="col-md-10 control-label" for="your_message">Your message:</label>
            <div class="col-md-10">
                <textarea id="your_message" name="your_message" class="form-control"></textarea>
            </div>
        </div>
    </div>
    <div class="card-body">
        <label class="col-md-4 control-label"></label>
        <div class="col-md-4">
            <button class="btn btn-danger btn-md" type="send_btn">Send</button>
            <a class="btn btn-info btn-md" href="./index.php">Back</a>
        </div>
    </div>
</form>