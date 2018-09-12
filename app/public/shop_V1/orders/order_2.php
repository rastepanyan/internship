<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Shop</title>
      <meta content="IE=edge" http-equiv="X-UA-Compatible">
      <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">
      <meta charset="utf-8">
      <meta content="shop, online, bargain, quality, free, shoes, belts, dresses, jackets, hats, trousers, Plovdiv, centre" name="keywords">
      <link href="../css/lib/bootstrap.css" rel="stylesheet">
   </head>
   <body>
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
         <div class="container">
            <a class="navbar-brand" href="../index.php">ONLINE SHOP</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
               <ul class="navbar-nav ml-auto">
                  <li class="nav-item active">
                     <a class="nav-link" href="../index.php">Home</a>
                  </li>
               </ul>
               <ul class="navbar-nav ml-right">
                  <li class="nav-item active">
                     <a class="nav-link" href="../cart.html">Cart</a>
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
            <div class="card card-outline-secondary">
               <div class="card-header">
                  <h5><strong>Order History</strong></h5>
               </div>
               <div class="card-body">
                  <table class="table table-responsive w-100 d-block d-md-table">
                     <thead class="thead-light">
                        <tr>
                           <th scope="col" class="text-uppercase small font-weight-bold">order id</th>
                           <th scope="col" class="text-uppercase small font-weight-bold">position</th>
                           <th scope="col" class="text-uppercase small font-weight-bold">product</th>
                           <th scope="col" class="text-uppercase small font-weight-bold">quantity</th>
                           <th scope="col" class="text-uppercase small font-weight-bold">item price</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                           <th scope="row">2</th>
                           <td>1</td>
                           <td>Belt</td>
                           <td>1</td>
                           <td>£29.50</td>
                        </tr>
                        <tr>
                           <th scope="row">2</th>
                           <td>2</td>
                           <td>Jacket</td>
                           <td>2</td>
                           <td>£68.89</td>
                        </tr>
                     </tbody>
                  </table>
                  <hr>
                  <div class="row w-100 d-block">
                     <div class="col">
                        <div class="float-left">
                           <a href="../checkout.php" class="btn btn-primary btn-block">Checkout</a>
                           <a href="../order_list.php" class="btn btn-primary btn-block">Back</a>				  
                        </div>
                        <div class="float-right">
                           <a href="#" class="btn btn-info btn-block">Edit</a>
                           <a href="#" class="btn btn-danger btn-block">Delete</a>
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
