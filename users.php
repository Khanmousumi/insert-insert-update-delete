<?php
  
require_once 'db.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
  
    <title>DataTable</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/dataTables.bootstrap5.min.css">
</head>
<body>
    <div class="container">
          <table id="example" class="table table-striped">
		   <thead>
			<tr>
				<th>id</th>
				<th>fullname</th>
				<th>email</th>
				<th>phonenumber</th>
				<th>action</th>
				
				
			</tr>
		   </thead>
		   <tbody>
                 <?php
				 $select_data= mysqli_query($conn,"SELECT * FROM `registration`");
				 while ($rows=mysqli_fetch_assoc ($select_data)){?>
				 <tr>
				<td><?php echo $rows ['id'];?></td>
				<td><?php echo $rows ['fullname'];?></td>
				<td><?php echo $rows ['email'];?></td>
				<td><?php echo $rows ['phonenumber'];?></td>
				<td><a href="edit.php?id=<?php echo $rows ['id'];?>">Edit</a>   
				<a href="delete.php?id=<?php echo $rows ['id'];?>"onclick="return confirm('Are you want to delete this record?')"
				>Delete</a></td>
			  </tr>

				 <?php

				 }
				 
				 ?>

			
		    </tbody>
	
    
	    </table>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/dataTables.bootstrap5.min.js"></script>
    <script src="js/dataTables.min.js"></script>
    <script>
     new DataTable('#example');
   </script>
 
</body>
</html>
