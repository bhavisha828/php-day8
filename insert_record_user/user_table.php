<?php  
//Db connection
$connection = mysqli_connect("localhost","root","","php_internship");
//query 
$q = mysqli_query($connection,"select * from user_table where is_delete = 0") or die(mysqli_error($connection));


echo "<table border='1'>";
echo "<tr>";
echo "<th>Id</th>";
echo "<th>Name</th>";
echo "<th>Gender</th>";
echo "<th>Mobile</th>";
echo "<th>Email</th>";
echo "<th>Action</th>";
echo "</tr>";
$i = 0;
while ($row = mysqli_fetch_array($q)) {
	$i++;
	echo "<tr>";
    echo "<td>$i</td>";
    echo "<td>{$row['user_name']}</td>";
    echo "<td>{$row['user_gender']}</td>";
    echo "<td>{$row['user_mobile']}</td>";
    echo "<td>{$row['user_email']}</td>";
    echo "<td><a href='edit.php?id={$row['user_id']}'>Edit</a> | <a href='user_delete.php?deleteid={$row['user_id']}'>Delete</a></td>";
    echo "</tr>";
}
echo "</table>";

echo "<button><a href='insert_user_record.php'>Add Record</a></button>";
?>