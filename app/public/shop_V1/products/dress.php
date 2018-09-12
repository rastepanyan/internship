
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
                     <a class="nav-link" href="../cart.php">Cart</a>
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
                     <a href="../product_list.php" class="list-group-item active">Product List</a>
                     <a href="../order_list.php" class="list-group-item">Order List</a>
                  </div>
               </div>
               <div class="col-lg-9">
                  <div class="card">
                     <img class="card-img-top img-fluid" src="./img/<?php echo $row['images']; ?>" alt="">
                     <div class="card-body">
                        <h3 class="card-title"><strong><?php echo $row['title']; ?></strong></h3>
                        <h4>&#163;<?php echo $row['price']; ?></h4>
                        <p class="card-text text-justify">
                           <i>
                               <?php echo $row['description']; ?>
                           </i>
                        </p>
                     </div>
                  </div>
                  <div class="card card-outline-secondary my-4">
                     <div class="card-header">
                        <h5>Place Order</h5>
                     </div>
                     <div class="card-body">
                        <p>Product Code: 023H01USREI</p>
                        <small class="text-muted">Warranty: 30 Days</small><br>
                        <small class="text-muted">Quantity: 54</small><br>
                        <hr>
                        <div class="row w-100 d-block">
                           <div class="col">
                              <div class="float-left">
                                 <a href="../cart.php" class="btn btn-primary btn-block">Add to Cart</a>
                                 <a href="../product_list.php" class="btn btn-primary btn-block">Cancel</a>
                              </div>
                              <div class="float-right">
                                 <a href="../add/add_dresses.html" class="btn btn-info btn-block">Edit</a>								  
                                 <a href="#" class="btn btn-danger btn-block">Delete</a>
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
