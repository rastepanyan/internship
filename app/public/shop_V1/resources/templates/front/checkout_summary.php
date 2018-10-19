<form class="card" action="" method="post" enctype="multipart/form-data">
    <div class="card-header">
        <h5><strong>Billing Address</strong></h5>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-6 mb-2">
                <div class="md-form">
                    <label for="first_name-billing">First name:</label>
                    <input id="first_name-billing" type="text" maxlength="20" class="form-control" placeholder="Rafi" required>
                </div>
            </div>
            <div class="col-md-6 mb-2">
                <div class="md-form">
                    <label for="last_name-billing">Last name:</label>
                    <input id="last_name-billing" type="text" maxlength="30" class="form-control" placeholder="Stepanyan" required>
                </div>
            </div>
        </div>
        <br>
        <div class="md-form mb-5">
            <label for="address-billing">Address:</label>
            <input id="address-billing" type="text" maxlength="255" class="form-control" placeholder="22 Tzarevetz Str" required>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-12 mb-4">
                <label for="country_code-billing">Country Code:</label>
                <select id="country_code-billing" class="custom-select d-block w-100" required>
                    <option value="">Choose...</option>
                    <option>BG</option>
                    <option>MK</option>
                    <option>UK</option>
                    <option>US</option>
                </select>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <label for="post_code-billing">Post Code</label>
                <input id="post_code-billing" type="text" maxlength="8" class="form-control" placeholder="4001" required>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <label for="city-billing">City</label>
                <input id="city-billing" type="text" maxlength="30" class="form-control" placeholder="Plovdiv" required>
            </div>
        </div>
        <br>
        <h5><strong>Delivery Address</strong></h5>
        <hr>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6 mb-2">
                    <div class="md-form">
                        <label for="first_name-delivery">First name:</label>
                        <input id="first_name-delivery" type="text" maxlength="20" class="form-control" placeholder="Rafi" required>
                    </div>
                </div>
                <div class="col-md-6 mb-2">
                    <div class="md-form">
                        <label for="last_name-delivery">Last name:</label>
                        <input id="last_name-delivery" type="text" maxlength="30" class="form-control" placeholder="Stepanyan" required>
                    </div>
                </div>
            </div>
            <br>
            <div class="md-form mb-5">
                <label for="address-delivery">Address:</label>
                <input id="address-delivery" type="text" maxlength="255" class="form-control" placeholder="3 Bankova Str" required>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-12 mb-4">
                    <label for="country_code-delivery">Country Code:</label>
                    <select id="country_code-delivery" class="custom-select d-block w-100" required>
                        <option value="">Choose...</option>
                        <option>BG</option>
                        <option>MK</option>
                        <option>UK</option>
                        <option>US</option>
                    </select>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <label for="post_code-delivery">Post Code</label>
                    <input id="post_code-delivery" type="text" maxlength="8" class="form-control" placeholder="4000" required>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <label for="city-delivery">City</label>
                    <input id="city-delivery" type="text" maxlength="30" class="form-control" placeholder="Plovdiv" required>
                </div>
            </div>
        </div>
        <hr>
        <div class="custom-control custom-checkbox">
            <input id="same-address" type="checkbox" class="custom-control-input">
            <label class="custom-control-label" for="same-address">Delivery address is the same as my Billing address</label>
        </div>
        <div class="custom-control custom-checkbox">
            <input id="save-info" type="checkbox" class="custom-control-input">
            <label class="custom-control-label" for="save-info">Save this information for next time</label>
        </div>
        <hr>
        <div class="d-block my-3">
            <div class="custom-control custom-radio">
                <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                <label class="custom-control-label" for="credit">Credit card</label>
            </div>
            <div class="custom-control custom-radio">
                <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
                <label class="custom-control-label" for="debit">Debit card</label>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="cc-name">Name on card :</label>
                <input id="cc-name" type="text" class="form-control" placeholder="R A STEPANYAN" required>
                <small class="text-muted">Full name as displayed on card</small>
            </div>
            <div class="col-md-6 mb-3">
                <label for="cc-number">Credit card number :</label>
                <input type="text" maxlength="19" pattern="[0-9.]+" class="form-control" id="cc-number" required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 mb-2">
                <label for="cc-expiration-month">Expiration</label>
                <input id="cc-expiration-month" type="number" min="1" max="12" class="form-control" required>
            </div>
            <div class="col-md-3 mb-3">
                <label for="cc-expiration-year">(MM/YYYY) :</label>
                <input id="cc-expiration-year" type="number" min="2018" max="2030" class="form-control" required>
            </div>
            <div class="col-md-3 mb-3">
                <label for="cc-cvv">CVV :</label>
                <input id="cc-cvv" type="number" min="0" max="999" class="form-control" required>
            </div>
        </div>
        <hr>
        <div class="row w-100 d-block">
            <div class="col">
                <div class="btn-toolbar float-left">
                    <a class="btn btn-primary btn-lg btn-block" href="#">Confirm</a>
                    <a class="btn btn-secondary btn-lg btn-block" href="cart.php">Back</a>
                </div>
            </div>
        </div>
    </div>
</form>
</div>
<div class="col-md-3 mb-3">
    <div class="card-header">
        <h5><strong>Your Cart</strong></h5>
    </div>
    <ul class="list-group mb-3 z-depth-1">
        <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div>
                <h6 class="my-0">Shoes</h6>
                <small class="text-muted">11, Brown, 1 Piece</small>
            </div>
            <span class="text-muted">£119.99</span>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div>
                <h6 class="my-0">Trousers</h6>
                <small class="text-muted">XXL, Black, 1 Piece</small>
            </div>
            <span class="text-muted">£89.99</span>
        </li>
        <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div>
                <h6 class="my-0">Hat</h6>
                <small class="text-muted">L, Red, 2 Pieces</small>
            </div>
            <span class="text-muted">£12.89</span>
        </li>
        <li class="list-group-item d-flex justify-content-between">
        </li>
        <li class="list-group-item d-flex justify-content-between">
            <span>VAT Tax:</span>
            <strong>20%</strong>
        </li>
        <li class="list-group-item d-flex justify-content-between">
            <span>Total (GBP)</span>
            <strong>£235.76</strong>
        </li>
    </ul>
</div>