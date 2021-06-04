<?php
$connection = mysqli_connect("localhost","root","","php_internship");

if ($_POST) {
	
	$user_name = $_POST['txt1'];
	$user_gender = $_POST['txt2'];
	$user_mobile = $_POST['txt3'];
	$user_email = $_POST['txt4'];

	$q = mysqli_query($connection, "insert into user_table (user_name, user_gender, user_mobile, user_email) values('{$user_name}','{$user_gender}','{$user_mobile}','{$user_email}')") or die(mysqli_error($connection));
	if ($q) {
		echo "<script>alert('record added')</script>";
	}
}

?>


<html>
   <body>
   	<table border="1px solid">
   	
<form method=post>
	<tr><td> Name: <input type="text" name="txt1"/></td></tr>
	<tr><td>Gender: <select name="txt2">
        <option>Male</option>
        <option>Female</option>
            </select></td></tr>
    <tr><td>Mobile No: <input type="number" name="txt3"/> </td></tr>
    <tr><td>Email : <input type="email" name="txt4"/> </td></tr>
        <tr><td><input type="submit"/> </td></tr>      
</form>

</table>
   </body>
</html>



echo "<a href='user_table.php'>Display Record</a>";