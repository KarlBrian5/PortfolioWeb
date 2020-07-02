
<?php
include_once('hbd.php');
if(isset($_POST['submit']))
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phoneno = $_POST['phoneno'];
  $contain = $_POST['contain'];
  
    
  $sql = "INSERT INTO contactus(name, email, phoneno, contain) VALUES ('$name', '$email', '$phoneno', '$contain')";
    mysqli_query($con, $sql);