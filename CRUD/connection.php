<?php
$con=new mysqli('localhost', 'root', '', 'products');
if(!$con){
  die(mysqli_error($con));
}
?>