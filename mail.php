<?php
if(isset( $_POST['name']))
$name = $_POST['name'];
if(isset( $_POST['email']))
$email = $_POST['email'];
if(isset( $_POST['message']))
$message = $_POST['message'];
if(isset( $_POST['subject']))
$subject = $_POST['subject'];

echo '<script>alert("Your message has been recieved. Thank You.")</script>'; 
echo '<script>window.location.href="index.php"</script>'; 
?>