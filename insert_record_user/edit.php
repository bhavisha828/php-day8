<?php 
$connection = mysqli_connect("localhost","root","","php_internship");

if(!isset($_GET['id']) || empty($_GET['id']) ){
   header("location:user_table.php");
}

$editid = $_GET['id'];
 

$editq = mysqli_query($connection,"select * from user_table where user_id='{$editid}'") or die(mysqli_error($connection));

$editdata = mysqli_fetch_array($editq);
//print_r($editdata);

if ($_POST) {
   $txt1 = $_POST['txt1'];
   $txt2 = $_POST['txt2'];
   $txt3 = $_POST['txt3'];
   $txt4 = $_POST['txt4'];

   $uq = mysqli_query($connection, "update user_table set user_name='{$txt1}',user_gender='{$txt2}',user_mobile='{$txt3}',user_email='{$txt4}' where user_id='{$editid}'") or die(mysqli_error($connection));

   if ($uq) {
      echo "<script>alert('Record Updated'); window.location='user_table.php'; </script>";
   }
}

?>


<html>
<body>

<form method="post">
    Name: <input type="text" value="<?php echo $editdata['user_name']; ?>" name="txt1"/><br/>
    Gender:Male<input type="radio" <?php  if($editdata['user_gender']=='Male') {echo "checked"; }  ?> value="Male" name="txt2"/>
           Female<input type="radio" <?php  if($editdata['user_gender']=='Female') {echo "checked"; }  ?> value="Female" name="txt2"/><br/>
    Mobile No:<input type="number" value="<?php echo $editdata['user_mobile']; ?>" name="txt3"/><br/>  
    Email: <input type="email" value="<?php echo $editdata['user_email']; ?>" name="txt4"/><br/>
       <input type="submit"/>
</form>

</body>
</html>


