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
            <a class="navbar-brand" href="../index.html">ONLINE SHOP</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
               <ul class="navbar-nav ml-auto">
                  <li class="nav-item active">
                     <a class="nav-link" href="../index.html">Home</a>
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
            <div class="row">
               <div class="col-lg-3">
                  <div class="list-group">
                     <a href="../product_list.html" class="list-group-item active">Product List</a>
                     <a href="../order_list.html" class="list-group-item">Order List</a>
                  </div>
               </div>
               <div class="col-lg-9">
                  <form class="card">
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
                  </form>
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