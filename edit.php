<?php
  require_once 'db.php';
  $id=$_GET['id'];

   $select_data= mysqli_query($conn,"SELECT * FROM `registration` wHERE `id`='$id'");
				 $rows=mysqli_fetch_assoc ($select_data);

         if(isset($_POST['submit'])){
           $fullname =$_POST['fullname'];
           $email =$_POST['email'];
           $phonenumber =$_POST['phonenumber'];

           $update_query=mysqli_query($conn,"UPDATE `registration` SET `fullname`='$fullname',`email`='$email',`phonenumber`='$phonenumber' WHERE `id`='$id' ");

           if($update_query){
             echo '<script>
    alert("successfully updated");
    window.location.href="users.php";
    
    </script>';
           }
         }





?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body> 
   <form action="" method="post">

                
                    <label for="">Full Name</label>
                    <input type="text" 
                           name="fullname" id="" value="<?php echo $rows ['fullname'];?>"
                           ><br>

                             <label for="">email</label>
                    <input type="text" 
                           name="email" id="" value="<?php echo $rows ['email'];?>"
                           ><br>

                             <label for="">phonenumber</label>
                    <input type="text" 
                           name="phonenumber" id="" value="<?php echo $rows ['phonenumber'];?>"
                           ><br>

                        
              


                <input type="submit" value="submit" name="submit">
                    
</input>

</form>
  
</body>
</html>