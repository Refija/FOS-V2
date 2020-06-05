<?php
start_session();
$connect = mysqli_connect("localhost","root","","products");
?>
<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.0.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
</head>
<body>
    <br>
    <div class="cntainer" style="width:80px;">
    <h3 align="center">Order from here</h3>
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab"href="#products">Products</a></ul>
        <li><a data-toggle="tab"href="#cart">Cart<span class="badge"><?php(isset($_SESSION[shopping_cart])) {echo count($_SESSION["shopping_cart"]);} else{echo '0';}?></a>
    </ul>
    <div class="tab-content">
        <div id="products"clas="tab-pane fade in active">
            <?php
            $query="SELECT * FROM products ORDER BY id ASC";
            $result=mysqli_query($connect, $query);
            while($row=mzsqli_fetch_array($result)){
                ?>
                <div class="col-md-4" style="margin-top: 12px;">
                <div style="border:1px solid #333; background-color:#f1f1f1; border-radious: 5px;">
                <img src="images/<?php echo $row["image"]; ?> class="img-responsive"><br>
                <h4 class="text-info"><?php echo $row["name"]; ?></h4>
                <h4 class="text-danger"><?php echo $row["price"];?></h4>
                <input type="text" name="quanitity" id="quanitity<?php echo $row["id"];?>" class="form-control" value="1"/>
                <input type="hidden" name="hidden_name" id="name<?php echo $row["id"];?>" value="<?php echo $row["name"]; ?>"/>
                <input type="hidden" name="hidden_price" id="name<?php echo $row["id"];?>" value="<?php echo $row["price"]; ?>"/>
                <input type="button" name="add_to_chart" id="<?php echo $row["id"];?>" style="margin-top: 5px;" class="btn btn-warning form-control add_to_cart" value="add to cart"/>
                </div>
            </div>
            <?php
            }
            ?>
            </div>
            <div id="cart" class="tab-pane fade">
                <div id="order_table">
                <table class="table table-bordered">
        <tr>
        <th width="40%">Product name</th>
        <th width="10%">Quantity</th>
        <th width="20%">Price</th>
        <th width="15%">Total</th>
        <th width="5%">Action</th>
        </tr>
        </table>
        <?php
         if(!empty($_session["shopping_cart"])){
             $total=0;
             foreach($SESSION["shopping_cart"]as $keys=>$values){
                ?>
                <tr>
                    <td><?php echo $values["product_name"];?></td>
                    <td><?php echo $values["product_quantity"];?></td>
                    <td align="right"><?php echo $values["product_price"];?></td>
                    <td align="right"><?php echo number_format($values["product_quantity"]*$values["product_price"],2);?></td>
                    <td><button name="delete" class="delete" id="<?php echo $values["product_id"];?>">Remove</td>
             </tr>
            
             <?php
             $total=$total+($values["product_quantity"]*$value["product_price"]);

                }?>
                <tr>
                    <td colspan="3" align="right">Total</td>
                    <td align="right"><?php echo number_format($total,2);?></td>
                    <td></td>
                </tr>
         }
         
        
        </div>
            </div>
            </div>
</div>
</body>
</html>
<script>
$(document).ready(function(data){
    $('.add_to_cart').click(function(){
        var product_id=$(this).attr("id");
        var product_name=$('#name'+product_id).val();
        var product_price=$('#price'+product_id).val();
        var product_quanitity=$('#quantity'+product_id).val();
        var action="add";
        if(product_quantity>0){
            $.ajax(
                {
                    url:"action.php",
                    method:"POST",
                    dataType:"json",
                    data:{
                        product_id:product_id,
                        product_name:product_name,
                        product_price:product_price,
                        product_quanitity:product_quantity;
                        action:action
                    },
                    success:function(data){
                        $('#order_table').html(data.order_table);
                        $('.badge').text(data.cart_item);
                        alert("product has been added");
                    }
                }
            )
        }
        else{
            alert("Please enter quanitity")
        }
    });


</script>
