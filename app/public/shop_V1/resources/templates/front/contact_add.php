<form action="/shop_V1/resources/send_message.php" method="post">
    <div class="card text-left">
        <div class="card-body">
            <div class="col-md-5 mb-2">
                <div class="md-form">
                    <label for="your_name"><strong>Your Name:</strong></label>
                    <input id="your_name" type="text" name="your_name" class="form-control" required>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="col-md-5 mb-2">
                <div class="md-form">
                    <label for="email"><strong>Email:</strong></label>
                    <input id="email" type="text" name="email" class="form-control" required>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="col-md-5 mb-2">
                <div class="md-form">
                    <label for="subject"><strong>Subject:</strong></label>
                    <input id="subject" type="text" name="subject" class="form-control" required>
                </div>
            </div>
        </div>
        <div class="card-body">
            <label class="col-md-10 control-label" for="your_message"><strong>Your message:</strong></label>
            <div class="col-md-10">
                <textarea id="your_message" name="your_message" class="form-control"></textarea>
            </div>
        </div>
        <h2><strong><?php display_error(); ?></strong></h2>
        <div class="card-body">
            <hr>
            <label class="col-md-4 control-label"></label>
            <div class="col-md-4">
                <button type="submit" name="send_btn" class="btn btn-danger btn-md">Send</button>
                <a class="btn btn-info btn-md" href="index.php">Back</a>
            </div>
        </div>
    </div>
</form>
