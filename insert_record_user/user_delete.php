<?php

$connection = mysqli_connect("localhost","root","","php_internship");

$id = $_GET['deleteid'];


$q = mysqli_query($connection, 
          "update user_table set is_delete = 1 where user_id='{$id}'") or die(mysqli_error($connection));

if($q){
echo "<script>alert('Record Deleted');window.location='user_table.php';</script>";
}

?>