<?php
    include 'connection.php';
    ?>

<!doctype html>
<html lang="en">
    <head> 
        <title>19CSE049</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    </head>
	
    <body>
        <div class="container">
		
		<h2 style = "text-align:center; color: blue; margin: 10px 0px 25px"> <i>Product Details</i></h2>

        <table class="table">
            <thead>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Quantity</th>
				 <th scope="col">Price</th>
                <th scope="col">Expire_date</th>
                <th scope="col">Action</th>
            </thead>
            <tbody>
                <?php
                    $sql="select * from product";
                    $result=mysqli_query($con,$sql);
                    if($result)
                    {
                        
                        while($row=mysqli_fetch_assoc($result))
                        {
                            $id=$row['id'];
                            $name=$row['name'];
                            $description=$row['description'];
                            $quantity=$row['quantity'];
							$price=$row['price'];
                            $expire_date=$row['expire_date'];
                           echo '<tr>
                           <th scope="row">'.$id.'</th>
                           <td>'.$name.'</td>
                           <td>'.$description.'</td>
                           <td>'.$quantity.'</td>
						   <td>'.$price.'</td>
                           <td>'.$expire_date.'</td>
                           <td>
                    <button class="btn btn-primary"><a href="update.php?updateid='.$id.' " class="text-light">Update</a></button>
                    <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.' " class="text-light">Delete</a></button>
                </td>
                           </tr>';
                        }
                    }
                    else{
                        echo "No iteam available!";
                    }
                ?>
                
            </tbody>
        </table>
		
		<button class="btn btn-primary my-5"><a href="add.php" class="text-light">Add Item</a></button>
        </div>

    </body>
</html>