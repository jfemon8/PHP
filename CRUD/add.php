
<?php
include 'connection.php';
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $description=$_POST['description'];
    $quantity=$_POST['quantity'];
	$price=$_POST['price'];
    $expire_date=$_POST['expire_date'];

    $sql="insert into product(name, description, quantity, price, expire_date)
    values('$name', '$description', '$quantity', '$price', '$expire_date')";
    $result=mysqli_query($con,$sql);
    if($result)
      {
         header('location:index.php');

      }
      else{
        die(mysqli_error($con));
      }
}
?>


<html>
  <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <title>19CSE049</title>
  </head>
  
  <body>
  
    <div class="container my-5">
	<h2 style = "text-align:center; color: blue; margin: 10px 0px 25px"> <i>Add Product</i></h2>

		<form method="post">
	  
		  <div class="form-group">
			<label>Name</label>
			<input type="text" class="form-control"  name="name" placeholder="Please Enter Product Name" required autocomplete="off">
		  </div>

		  <div class="form-group">
			<label>Description</label>
			<input type="text" class="form-control"  name="description" placeholder="Please Enter Product Description" autocomplete="off">
		  </div>

		  <div class="form-group">
			<label>Quantity</label>
			<input type="text" class="form-control"  name="quantity" placeholder="Please Enter Product Quantity" required autocomplete="off">
		  </div> 
		 
		  <div class="form-group">
			<label>Price</label>
			<input type="text" class="form-control"  name="price" placeholder="Please Enter Product Price per unit" required autocomplete="off">
		  </div>

		  <div class="form-group">
			<label>Expire_date</label>
			<input type="date" class="form-control"  name="expire_date" required autocomplete="off">
		  </div>
		  
		  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
		</form>
	</div>
  
  </body>
  
</html>