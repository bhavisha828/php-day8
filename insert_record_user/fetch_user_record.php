<?php  
//Db connection
$connection = mysqli_connect("localhost","root","","php_internship");
//query 
$q = mysqli_query($connection,"select * from user_table") or die(mysqli_error($connection));
//below function will fetch the data as Numerical Array
$row = mysqli_fetch_row($q);
//Debug
echo "<pre>";
print_r($row);
echo $row[0].$row[1].$row[2].$row[3];
//Numerical and Associative
$row = mysqli_fetch_array($q);
echo "<pre>";
print_r($row);

echo $row[0].$row[1].$row[2].$row[3];
echo $row['user_id'].$row['user_name'].$row['user_gender'].$row['user_mobile'].$row['user_email'];
echo "</pre>";


?>