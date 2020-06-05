<?php   
 session_start();  
 $connect = mysqli_connect("localhost", "root", "", "shopping_cart");  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Menu.</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</head>  
<body > 
      <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
           <div class="container" style="width:1350px; height: 10000px;background-color: white; padding:100px;">  
           <p><a class="bth btn-lg "href="index.php">Back to Home page</a></p> <br>
           <h2 align="center" class="site-primary-title display-4">Menu</h2> 
           <form  method="post" action="search.php"  id="searchform" style="float: right;"> 
	      <input  type="text" name="name"> 
	      <input  type="submit" name="submit" value="Search"> 
               </form> 
                <ul class="nav nav-tabs">  <!-- nav-tabs -->
                    <li class="active"><a data-toggle="tab" href="#products">All products</a></li>
                    <li><a data-toggle="tab" href="#chicken">Chicken meals</a></li>
                   <!-- <li><a data-toggle="tab" href="#pasta">Pasta</a></li> -->
                    <li><a data-toggle="tab" href="#pizza">Pizza</a></li>
                    <li><a data-toggle="tab" href="#sweets">Sweet program</a></li>
                     <li><a data-toggle="tab" class="glyphicon glyphicon-shopping-cart" href="#cart">Cart <span class="badge" style="background-color:red;"><?php if(isset($_SESSION["shopping_cart"])) { echo count($_SESSION["shopping_cart"]); } else { echo '0';}?></span></a></li>  
                </ul>  
                <div class="tab-content">  
                     <div id="products" class="tab-pane fade in active">  
                     <?php  
                     $query = "SELECT * FROM tbl_product ORDER BY id ASC";  
                     $result = mysqli_query($connect, $query);  
                     while($row = mysqli_fetch_array($result))  
                     {  
                     ?>  
                     <div class="col-md-3" style="margin-top:12px;">  
                          <div style=" padding:16px; height:400px;" align="center">  
                               <img src="images/<?php echo $row["image"]; ?>" style="height:150px; width:150px;" class="img-responsive" /><br />  
                               <h4 class="text-info"><?php echo $row["name"]; ?></h4> 
                               <p class="text-info"><?php echo $row["descript"]; ?></p> 
                               <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">Details</button>
                               
                                   <!-- Modal -->
                                   <div class="modal fade" id="myModal" role="dialog">
                                   <div class="modal-dialog">
                                   
                                   <!-- Modal content-->
                                   <div class="modal-content">
                                        <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="text-info">Addition to order</h4>
                                        </div>
                                        <div class="modal-body">
                                        <img src="images/<?php echo $row["image"]; ?>" style="height:150px; width:150px;float:left;" class="img-responsive" /><br />
                                        <p>Important to mention, All prices on the pictures are for small size, for medium and big portion is 1 KM extra on the displayed price.</p>
                                        <div class="col-md-2">
                                        <form action="/action_page.php">
                                        <h5><b>Additional order:</b></h5>
                                        <ul class="nav nav-tabs">
                                             <li><input type="checkbox" name="additional" value="Cheese">Cheese<br></li>
                                             <li><input type="checkbox" name="additiona2" value="Salat">Bread<br></li>
                                             <li><input type="checkbox" name="additiona3" value="Bread">Salat<br></li>
                                             <ul>
                                             </form>
                                             </div>
                                             <div class="col-md-2">
                                             <h5><b>Size:</b> </h5>
                                             <select>
                                             <option value="Small">Small</option>
                                             <option value="Medium">Medium</option>
                                             <option value="Big">Big</option>
                                             </select> 
                                             </div>
                                        <h4 class="text-danger">Price: <?php echo $row["price"]; ?> KM</h4>  
                                        <input type="text" name="quantity" id="quantity<?php echo $row["id"]; ?>" class="form-control"  value="1" />  
                                        <input type="hidden" name="hidden_name" id="name<?php echo $row["id"]; ?>" value="<?php echo $row["name"]; ?>" />  
                                        <input type="hidden" name="hidden_descript" id="name<?php echo $row["id"]; ?>" value="<?php echo $row["descript"]; ?>" />
                                        <input type="hidden" name="hidden_price" id="price<?php echo $row["id"]; ?>" value="<?php echo $row["price"]; ?>" /> 
                                        </div>
                                        <div class="modal-footer">
                                        <input type="button" name="add_to_cart" id="<?php echo $row["id"]; ?>" style="margin-top:5px;" class="btn btn-warning form-control add_to_cart" value="Add to Cart" />
                                        </div>
                                   </div>
                                   
                                   </div>
                                   </div>
                               <h4 class="text-danger"><?php echo $row["price"]; ?> KM</h4>  
                               <input type="text" name="quantity" id="quantity<?php echo $row["id"]; ?>" class="form-control" value="1" />  
                               <input type="hidden" name="hidden_name" id="name<?php echo $row["id"]; ?>" value="<?php echo $row["name"]; ?>" />  
                               <input type="hidden" name="hidden_price" id="price<?php echo $row["id"]; ?>" value="<?php echo $row["price"]; ?>" />  
                               <input type="button" name="add_to_cart" id="<?php echo $row["id"]; ?>" style="margin-top:5px;" class="btn btn-warning form-control add_to_cart" value="Add to Cart" />  
                          </div>  
                     </div>  
                     <?php  
                     }  
                     ?>  
                     </div>
                     <!-- Chicken meals tab  -->
                   
                     <div id="chicken" class="tab-pane fade">  
                     <?php  
                     $query = "SELECT * FROM tbl_chicken ORDER BY id ASC";  
                     $result = mysqli_query($connect, $query);  
                     while($row = mysqli_fetch_array($result))  
                     {  
                     ?>  
                     <div class="col-md-3" style="margin-top:12px;">  
                          <div style=" padding:16px; height:350px;" align="center">  
                               <img src="images/<?php echo $row["image"]; ?>" style="height:150px; width:150px;" class="img-responsive" /><br />  
                               <h4 class="text-info"><?php echo $row["name"]; ?></h4> 
                               <h6 class="text-info"><?php echo $row["descript"]; ?></h6> 
                              
                               <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal2">Details</button>
                               
                                   <!-- Modal -->
                                   <div class="modal fade" id="myModal2" role="dialog">
                                   <div class="modal-dialog">
                                   
                                   <!-- Modal content-->
                                   <div class="modal-content">
                                        <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="text-info">Addition to order</h4>
                                        </div>
                                        <div class="modal-body">
                                        <img src="images/<?php echo $row["image"]; ?>" style="height:150px; width:150px;float:left;" class="img-responsive" /><br />
                                        <p>Important to mention, All prices on the pictures are for small size, for medium and big portion is 1 KM extra on the displayed price.</p>
                                        <div class="col-md-2">
                                        <form action="/action_page.php">
                                        <h5><b>Additional order:</b></h5>
                                        <ul class="nav nav-tabs">
                                             <li><input type="checkbox" name="additional" value="Cheese">Cheese<br></li>
                                             <li><input type="checkbox" name="additiona2" value="Salat">Bread<br></li>
                                             <li><input type="checkbox" name="additiona3" value="Bread">Salat<br></li>
                                             <ul>
                                             </form>
                                             </div>
                                             <div class="col-md-2">
                                             <h5><b>Size:</b> </h5>
                                             <select>
                                             <option value="Small">Small</option>
                                             <option value="Medium">Medium</option>
                                             <option value="Big">Big</option>
                                             </select> 
                                             </div>
                                        <h4 class="text-danger">Price: <?php echo $row["price"]; ?> KM</h4>  
                                        <input type="text" name="quantity" id="quantity<?php echo $row["id"]; ?>" class="form-control"  value="1" />  
                                        <input type="hidden" name="hidden_name" id="name<?php echo $row["id"]; ?>" value="<?php echo $row["name"]; ?>" />  
                                        <input type="hidden" name="hidden_descript" id="name<?php echo $row["id"]; ?>" value="<?php echo $row["descript"]; ?>" />
                                        <input type="hidden" name="hidden_price" id="price<?php echo $row["id"]; ?>" value="<?php echo $row["price"]; ?>" /> 
                                        </div>
                                        <div class="modal-footer">
                                        <input type="button" name="add_to_cart" id="<?php echo $row["id"]; ?>" style="margin-top:5px;" class="btn btn-warning form-control add_to_cart" value="Add to Cart" />
                                        </div>
                                   </div>
                                   
                                   </div>
                                   </div>
                               <h4 class="text-danger"><?php echo $row["price"]; ?> KM</h4>  
                               <input type="text" name="quantity" id="quantity<?php echo $row["id"]; ?>" class="form-control" value="1" />  
                               <input type="hidden" name="hidden_name" id="name<?php echo $row["id"]; ?>" value="<?php echo $row["name"]; ?>" />  
                               <input type="hidden" name="hidden_price" id="price<?php echo $row["id"]; ?>" value="<?php echo $row["price"]; ?>" />  
                               <input type="button" name="add_to_cart" id="<?php echo $row["id"]; ?>" style="margin-top:5px;" class="btn btn-warning form-control add_to_cart" value="Add to Cart" />  
                          </div>  
                     </div>  
                     <?php  
                     }  
                     ?>  
                     </div>
                     <!-- Pasta  -->
                     <div id="pasta" class="tab-pane fade">  
                     <?php  
                     $query = "SELECT * FROM tbl_pasta ORDER BY id ASC";  
                     $result = mysqli_query($connect, $query);  
                     while($row = mysqli_fetch_array($result))  
                     {  
                     ?>  
                     <div class="col-md-3" style="margin-top:12px;">  
                          <div style=" padding:16px; height:350px;" align="center">  
                               <img src="images/<?php echo $row["image"]; ?>" style="height:150px; width:150px;" class="img-responsive" /><br />  
                               <h4 class="text-info"><?php echo $row["name"]; ?></h4> 
                               <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal3">Details</button>
                               
                                   <!-- Modal -->
                                   <div class="modal fade" id="myModal3" role="dialog">
                                   <div class="modal-dialog">
                                   
                                   <!-- Modal content-->
                                   <div class="modal-content">
                                        <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="text-info">Addition to order</h4>
                                        </div>
                                        <div class="modal-body">
                                        <img src="images/<?php echo $row["image"]; ?>" style="height:150px; width:150px;float:left;" class="img-responsive" /><br />
                                        <p>Important to mention, All prices on the pictures are for small size, for medium and big portion is 1 KM extra on the displayed price.</p>
                                        <div class="col-md-2">
                                        <form action="/action_page.php">
                                        <h5><b>Additional order:</b></h5>
                                        <ul class="nav nav-tabs">
                                             <li><input type="checkbox" name="additional" value="Cheese">Cheese<br></li>
                                             <li><input type="checkbox" name="additiona2" value="Salat">Bread<br></li>
                                             <li><input type="checkbox" name="additiona3" value="Bread">Salat<br></li>
                                             <ul>
                                             </form>
                                             </div>
                                             <div class="col-md-2">
                                             <h5><b>Size:</b> </h5>
                                             <select>
                                             <option value="Small">Small</option>
                                             <option value="Medium">Medium</option>
                                             <option value="Big">Big</option>
                                             </select> 
                                             </div>
                                        <h4 class="text-danger">Price: <?php echo $row["price"]; ?> KM</h4>  
                                        <input type="text" name="quantity" id="quantity<?php echo $row["id"]; ?>" class="form-control"  value="1" />  
                                        <input type="hidden" name="hidden_name" id="name<?php echo $row["id"]; ?>" value="<?php echo $row["name"]; ?>" />  
                                        <input type="hidden" name="hidden_price" id="price<?php echo $row["id"]; ?>" value="<?php echo $row["price"]; ?>" /> 
                                        </div>
                                        <div class="modal-footer">
                                        <input type="button" name="add_to_cart" id="<?php echo $row["id"]; ?>" style="margin-top:5px;" class="btn btn-warning form-control add_to_cart" value="Add to Cart" />
                                        </div>
                                   </div>
                                   
                                   </div>
                                   </div>
                               <h4 class="text-danger"><?php echo $row["price"]; ?> KM</h4>  
                               <input type="text" name="quantity" id="quantity<?php echo $row["id"]; ?>" class="form-control" value="1" />  
                               <input type="hidden" name="hidden_name" id="name<?php echo $row["id"]; ?>" value="<?php echo $row["name"]; ?>" />  
                               <input type="hidden" name="hidden_price" id="price<?php echo $row["id"]; ?>" value="<?php echo $row["price"]; ?>" />  
                               <input type="button" name="add_to_cart" id="<?php echo $row["id"]; ?>" style="margin-top:5px;" class="btn btn-warning form-control add_to_cart" value="Add to Cart" />  
                          </div>  
                     </div>  
                     <?php  
                     }  
                     ?>  
                     </div>

                     <!--Sandwich -->
                     <div id="pizza" class="tab-pane fade in active">  
                     <?php  
                     $query = "SELECT * FROM tbl_sandwich ORDER BY id ASC";  
                     $result = mysqli_query($connect, $query);  
                     while($row = mysqli_fetch_array($result))  
                     {  
                     ?>  
                     <div class="col-md-3" style="margin-top:12px;">  
                          <div style=" padding:16px; height:400px;" align="center">  
                               <img src="images/<?php echo $row["image"]; ?>" style="height:150px; width:150px;" class="img-responsive" /><br />  
                               <h4 class="text-info"><?php echo $row["name"]; ?></h4> 
                               <p class="text-info"><?php echo $row["descript"]; ?></p> 
                               <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal5">Details</button>
                               
                                   <!-- Modal -->
                                   <div class="modal fade" id="myModal5" role="dialog">
                                   <div class="modal-dialog">
                                   
                                   <!-- Modal content-->
                                   <div class="modal-content">
                                        <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="text-info">Addition to order</h4>
                                        </div>
                                        <div class="modal-body">
                                        <img src="images/p10.jpg" style="height:150px; width:150px;float:left;" class="img-responsive" /><br />
                                        <p>Important to mention, All prices on the pictures are for small size, for medium and big portion is 1 KM extra on the displayed price.</p>
                                        <div class="col-md-3">
                                        <form action="/action_page.php">
                                        <h5><b>Additional order:</b></h5>
                                        <ul class="nav nav-tabs">
                                             <li><input type="checkbox" name="additional" value="Cheese">Ketchup<br></li>
                                             <li><input type="checkbox" name="additiona2" value="Salat">Cheese<br></li>
                                             <li><input type="checkbox" name="additiona3" value="Bread">Olives<br></li>
                                             <ul>
                                             </form>
                                             </div>
                                             <div class="col-md-2">
                                             <h5><b>Size:</b> </h5>
                                             <select>
                                             <option value="Small">Small</option>
                                             <option value="Medium">Medium</option>
                                             <option value="Big">Big</option>
                                             </select> 
                                             </div>
                                            
                                        <h4 class="text-danger">Price: <?php echo $row["price"]; ?> KM</h4>  
                                        <input type="text" name="quantity" id="quantity<?php echo $row["id"]; ?>" class="form-control"  value="1" />  
                                        <input type="hidden" name="hidden_name" id="name<?php echo $row["id"]; ?>" value="<?php echo $row["name"]; ?>" />  
                                        <input type="hidden" name="hidden_descript" id="name<?php echo $row["id"]; ?>" value="<?php echo $row["descript"]; ?>" />
                                        <input type="hidden" name="hidden_price" id="price<?php echo $row["id"]; ?>" value="<?php echo $row["price"]; ?>" /> 
                                        </div>
                                        <div class="modal-footer">
                                        <input type="button" name="add_to_cart" id="<?php echo $row["id"]; ?>" style="margin-top:5px;" class="btn btn-warning form-control add_to_cart" value="Add to Cart" />
                                        </div>
                                   </div>
                                   
                                   </div>
                                   </div>
                               <h4 class="text-danger"><?php echo $row["price"]; ?> KM</h4>  
                               <input type="text" name="quantity" id="quantity<?php echo $row["id"]; ?>" class="form-control" value="1" />  
                               <input type="hidden" name="hidden_name" id="name<?php echo $row["id"]; ?>" value="<?php echo $row["name"]; ?>" />  
                               <input type="hidden" name="hidden_price" id="price<?php echo $row["id"]; ?>" value="<?php echo $row["price"]; ?>" />  
                               <input type="button" name="add_to_cart" id="<?php echo $row["id"]; ?>" style="margin-top:5px;" class="btn btn-warning form-control add_to_cart" value="Add to Cart" />  
                          </div>  
                     </div>  
                     <?php  
                     }  
                     ?>  
                     </div>
                    <!-- Sweets -->
                    <div id="sweets" class="tab-pane fade in active">  
                     <?php  
                     $query = "SELECT * FROM tbl_sweets ORDER BY id ASC";  
                     $result = mysqli_query($connect, $query);  
                     while($row = mysqli_fetch_array($result))  
                     {  
                     ?>  
                     <div class="col-md-3" style="margin-top:12px;">  
                          <div style=" padding:16px; height:400px;" align="center">  
                               <img src="images/<?php echo $row["image"]; ?>" style="height:150px; width:150px;" class="img-responsive" /><br />  
                               <h4 class="text-info"><?php echo $row["name"]; ?></h4> 
                               <p class="text-info"><?php echo $row["descript"]; ?></p> 
                               <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal5">Details</button>
                               
                                   <!-- Modal -->
                                   <div class="modal fade" id="myModal5" role="dialog">
                                   <div class="modal-dialog">
                                   
                                   <!-- Modal content-->
                                   <div class="modal-content">
                                        <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="text-info">Addition to order</h4>
                                        </div>
                                        <div class="modal-body">
                                        <img src="images/i4.jpg" style="height:150px; width:150px;float:left;" class="img-responsive" /><br />
                                        <p>Important to mention, All prices on the pictures are for small size, for medium and big portion is 1 KM extra on the displayed price.</p>
                                        <div class="col-md-3">
                                        <form action="/action_page.php">
                                        <h5><b>Additional order:</b></h5>
                                        <ul class="nav nav-tabs">
                                             <li><input type="checkbox" name="additional" value="Cheese">Icecream<br></li>
                                             <li><input type="checkbox" name="additiona2" value="Salat">Chocolate<br></li>
                                             <li><input type="checkbox" name="additiona3" value="Bread">Cream<br></li>
                                             <ul>
                                             </form>
                                             </div>
                                            
                                        <h4 class="text-danger">Price: <?php echo $row["price"]; ?> KM</h4>  
                                        <input type="text" name="quantity" id="quantity<?php echo $row["id"]; ?>" class="form-control"  value="1" />  
                                        <input type="hidden" name="hidden_name" id="name<?php echo $row["id"]; ?>" value="<?php echo $row["name"]; ?>" />  
                                        <input type="hidden" name="hidden_descript" id="name<?php echo $row["id"]; ?>" value="<?php echo $row["descript"]; ?>" />
                                        <input type="hidden" name="hidden_price" id="price<?php echo $row["id"]; ?>" value="<?php echo $row["price"]; ?>" /> 
                                        </div>
                                        <div class="modal-footer">
                                        <input type="button" name="add_to_cart" id="<?php echo $row["id"]; ?>" style="margin-top:5px;" class="btn btn-warning form-control add_to_cart" value="Add to Cart" />
                                        </div>
                                   </div>
                                   
                                   </div>
                                   </div>
                               <h4 class="text-danger"><?php echo $row["price"]; ?> KM</h4>  
                               <input type="text" name="quantity" id="quantity<?php echo $row["id"]; ?>" class="form-control" value="1" />  
                               <input type="hidden" name="hidden_name" id="name<?php echo $row["id"]; ?>" value="<?php echo $row["name"]; ?>" />  
                               <input type="hidden" name="hidden_price" id="price<?php echo $row["id"]; ?>" value="<?php echo $row["price"]; ?>" />  
                               <input type="button" name="add_to_cart" id="<?php echo $row["id"]; ?>" style="margin-top:5px;" class="btn btn-warning form-control add_to_cart" value="Add to Cart" />  
                          </div>  
                     </div>  
                     <?php  
                     }  
                     ?>  
                     </div>
                     <!--Cart -->
                     <div id="cart" class="tab-pane fade">  
                          <div class="table-responsive" id="order_table">  
                               <table class="table table-bordered">  
                                    <tr>  
                                         <th width="40%">Product Name</th>  
                                         <th width="10%">Quantity</th>  
                                         <th width="20%">Price</th>  
                                         <th width="15%">Total</th>  
                                         <th width="5%">Action</th>  
                                    </tr>  
                                    <?php  
                                    if(!empty($_SESSION["shopping_cart"]))  
                                    {  
                                         $total = 0;  
                                         foreach($_SESSION["shopping_cart"] as $keys => $values)  
                                         {                                               
                                    ?>  
                                    <tr>  
                                         <td><?php echo $values["product_name"]; ?></td>  
                                         <td><input type="text" name="quantity[]" id="quantity<?php echo $values["product_id"]; ?>" value="<?php echo $values["product_quantity"]; ?>" data-product_id="<?php echo $values["product_id"]; ?>" class="form-control quantity" /></td>  
                                         <td align="right"><?php echo $values["product_price"]; ?> KM</td>  
                                         <td align="right"><?php echo number_format($values["product_quantity"] * $values["product_price"], 2); ?> KM</td>  
                                         <td><button name="delete" class="btn btn-danger btn-xs delete" id="<?php echo $values["product_id"]; ?>">Remove</button></td>  
                                    </tr>  
                                    <?php  
                                              $total = $total + ($values["product_quantity"] * $values["product_price"]);  
                                         }  
                                    ?>  
                                    <tr>  
                                         <td colspan="3" align="right">Total</td>  
                                         <td align="right"><?php echo number_format($total, 2); ?> KM</td>  
                                         <td></td>  
                                    </tr>  
                                    <tr>  
                                         <td colspan="5" align="center">
                                         <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModall">Send order</button>
                               
                                   <!-- Modal -->
                                   <div class="modal fade" id="myModall" role="dialog">
                                   <div class="modal-dialog">
                                            <!-- Modal content-->
                                   <div class="modal-content">
                                 
	
                                        <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="text-info">Please, enter Your details.</h4>
                                        </div>
                                        <div class="modal-body">
                                        <form action="form.php" method="post">
                                             <input type="text" name="name" placeholder=" Name"><br><br>
                                             <input type="text" name="surname" placeholder=" Surname"><br><br>
                                             <input type="text" name="phone" placeholder="Phone"><br><br>
                                             <input type="text" name="address" placeholder="Address"><br><br>
                                             <input value="Submit" class="btn btn-warning" type="submit">
                                             </form>
                                             
                                        
                                        </div>
                                       <!-- <div class="modal-footer">
                                        <input type="button" name="add_to_cart" id="<?php echo $row["id"]; ?>" style="margin-top:5px;" class="btn btn-warning form-control add_to_cart" value="Add to Cart" />
                                        </div> -->
                                   </div>
                                   
                                   </div>
                                   </div>
                                         
                                             <!-- <form method="post" action="cart.php">  
                                                   <input type="submit"class="btn btn-warning" name="place_order" value="Place Order" href="form.php" />  
                                              </form> -->
                                         </td>  
                                    </tr>  
                                    <?php  
                                    }  
                                    ?>  
                               </table>  
                          </div>  
                     </div>  
                     
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(data){  
      $('.add_to_cart').click(function(){  
           var product_id = $(this).attr("id");  
           var product_name = $('#name'+product_id).val();  
           var product_price = $('#price'+product_id).val();  
           var product_quantity = $('#quantity'+product_id).val();  
           var action = "add";  
           if(product_quantity > 0)  
           {  
                $.ajax({  
                     url:"action.php",  
                     method:"POST",  
                     dataType:"json",  
                     data:{  
                          product_id:product_id,   
                          product_name:product_name,   
                          product_price:product_price,   
                          product_quantity:product_quantity,   
                          action:action  
                     },  
                     success:function(data)  
                     {  
                          $('#order_table').html(data.order_table);  
                          $('.badge').text(data.cart_item);  
                          alert("Product has been Added into Cart");  
                     }  
                });  
           }  
           else  
           {  
                alert("Please Enter Number of Quantity")  
           }  
      });  
      $(document).on('click', '.delete', function(){  
           var product_id = $(this).attr("id");  
           var action = "remove";  
           if(confirm("Are you sure you want to remove this product?"))  
           {  
                $.ajax({  
                     url:"action.php",  
                     method:"POST",  
                     dataType:"json",  
                     data:{product_id:product_id, action:action},  
                     success:function(data){  
                          $('#order_table').html(data.order_table);  
                          $('.badge').text(data.cart_item);  
                     }  
                });  
           }  
           else  
           {  
                return false;  
           }  
      });  
      $(document).on('keyup', '.quantity', function(){  
           var product_id = $(this).data("product_id");  
           var quantity = $(this).val();  
           var action = "quantity_change";  
           if(quantity != '')  
           {  
                $.ajax({  
                     url :"action.php",  
                     method:"POST",  
                     dataType:"json",  
                     data:{product_id:product_id, quantity:quantity, action:action},  
                     success:function(data){  
                          $('#order_table').html(data.order_table);  
                     }  
                });  
           }  
      });  
 });  
 </script>