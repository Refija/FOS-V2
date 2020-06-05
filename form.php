<?php  
 //cart.php  
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
<style>
.container {
  height: 100%;
  width: 100%;
  left: 0;
    
    margin-top: -50px;
    
    top: 20%;
    left:35%;
    width: 100%;
  position: fixed;
  align-items: center;
  justify-content: center;
}
</style>
</head>  
<html>
<body>
<div class="container col-md-12">
<h3>Costumer details: </h2>
Name: <?php echo $_POST["name"]; ?><br>
Surname: <?php echo $_POST["surname"]; ?><br>
Phone Number: <?php echo $_POST["phone"]; ?><br>
Address: <?php echo $_POST["address"]; ?><br>
<br>
<br>
<h3>Expected time for the order delivery is 30 minutes;</h2>
<form method="post" action="index.php">  
        <input type="submit"class="btn btn-warning" name="place_order" value="Back to homepage" />  
      </form>
</div>


</body>
</html>