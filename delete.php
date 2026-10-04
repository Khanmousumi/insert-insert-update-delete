<?php
  require_once 'db.php';
$id=$_GET['id'];
  $query=mysqli_query($conn,"DELETE FROM `registration` WHERE `id`='$id'");
  if($query){
   echo '<script>
    alert("successfully Deleted");
    window.location.href="users.php";
    
    </script>';
  }

  ?>