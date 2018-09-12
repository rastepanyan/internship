<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Shop</title>
      <meta content="IE=edge" http-equiv="X-UA-Compatible">
      <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">
      <meta charset="utf-8">
      <meta content="shop, online, bargain, quality, free, shoes, belts, dresses, jackets, hats, trousers, Plovdiv, centre" name="keywords">
      <link href="css/lib/bootstrap.css" rel="stylesheet">
   </head>
   <body>
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
         <div class="container">
            <a class="navbar-brand" href="index.php">ONLINE SHOP</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
               <ul class="navbar-nav ml-auto">
                  <li class="nav-item active">
                     <a class="nav-link" href="index.php">Home</a>
                  </li>
               </ul>
               <ul class="navbar-nav ml-right">
                  <li class="nav-item active">
                     <a class="nav-link" href="#">Cart</a>
                  </li>
               </ul>
            </div>
         </div>
      </nav>
      <div class="container">
         <div class="jumbotron">
            <div class="container-fluid text-center">
               <h1>Online Shop</h1>
               <p>Quality, Price and Assortment</p>
            </div>
            <div class="row">
               <div class="col-lg-3">
                  <div class="list-group">
                     <a href="product_list.html" class="list-group-item active">Product List</a>
                     <a href="order_list.html" class="list-group-item">Order List</a>
                  </div>
               </div>
               <div class="col-lg-9">
                  <div class="card card-outline-secondary">
                     <div class="card-header">
                        <h5><strong>Your Cart</strong></h5>
                     </div>
                     <div class="card-body">
                        <table class="table table-responsive w-100 d-block d-md-table">
                           <thead class="thead-light">
                              <tr>
                                 <th scope="col" class="text-uppercase small font-weight-bold">#</th>
                                 <th scope="col" class="text-uppercase small font-weight-bold">title</th>
                                 <th scope="col" class="text-uppercase small font-weight-bold">price</th>
                                 <th scope="col" class="text-uppercase small font-weight-bold">vat</th>
                                 <th scope="col" class="text-uppercase small font-weight-bold">quantity</th>
                                 <th scope="col" class="text-uppercase small font-weight-bold">subtotal</th>
                                 <th></th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <th scope="row" data-th="#">1</th>
                                 <td data-th="Product">
                                    <div class="row">
                                       <div class="col-sm-10">
                                          <h4 class="nomargin">Shoes</h4>
                                          <p>Size: 11, Colour: Brown</p>
                                       </div>
                                    </div>
                                 </td>
                                 <td data-th="Price">£119.99</td>
                                 <td data-th="VAT">£24.00</td>
                                 <td data-th="Quantity">
                                    <input type="number" min="1" class="form-control text-center" value="1">
                                 </td>
                                 <td data-th="Subtotal" class="text-center">£143.99</td>
                                 <td class="actions">
                                    <a class="btn btn-primary btn-sm" href="#">Delete</a>								
                                 </td>
                              </tr>
                              <tr>
                                 <th scope="row" data-th="#">2</th>
                                 <td data-th="Product">
                                    <div class="row">
                                       <div class="col-sm-10">
                                          <h4 class="nomargin">Trousers</h4>
                                          <p>Size: XXL, Colour: Black</p>
                                       </div>
                                    </div>
                                 </td>
                                 <td data-th="Price">£89.99</td>
                                 <td data-th="VAT">£18.00</td>
                                 <td data-th="Quantity">
                                    <input type="number" min="1" class="form-control text-center" value="1">
                                 </td>
                                 <td data-th="Subtotal" class="text-center">£107.99</td>
                                 <td class="actions">
                                    <a class="btn btn-primary btn-sm" href="#">Delete</a>								
                                 </td>
                              </tr>
                              <tr>
                                 <th scope="row" data-th="#">3</th>
                                 <td data-th="Product">
                                    <div class="row">
                                       <div class="col-sm-10">
                                          <h4 class="nomargin">Hat</h4>
                                          <p>Size: XL, Colour: Red</p>
                                       </div>
                                    </div>
                                 </td>
                                 <td data-th="Price">£12.89</td>
                                 <td data-th="VAT">£2.58</td>
                                 <td data-th="Quantity">
                                    <input type="number" min="1" class="form-control text-center" value="2">
                                 </td>
                                 <td data-th="Subtotal" class="text-center">£30.94</td>
                                 <td class="actions">
                                    <a class="btn btn-primary btn-sm" href="#">Delete</a>								
                                 </td>
                              </tr>
                           </tbody>
                        </table>
                        <hr>
                        <div class="row w-100 d-block">
                           <div class="col">
                              <div class="float-left">
                                 <a class="btn btn-primary btn-block" href="checkout.php">Go to Checkout</a>
                                 <a class="btn btn-secondary btn-block" href="order_list.php">Back</a>
                              </div>
                              <div class="float-right">
                                 <a class="hidden-xs text-center"><strong>Total Amount:<br><p class="text-center">£282.92</p></strong></a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <footer class="footer blockquote-footer">
            <span class="text-muted">&copy; Copyright | 2018 &middot; <a href="https://www.dnhsoft.com/">DNH Soft</a></span>
            <p class="text-right"><a href="#top">Back to Top</a></p>
         </footer>
      </div>
   </body>
</html>