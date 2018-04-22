<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

echo "<table border=1>";
echo "<tr>";
echo "  <td>Id</td><td>Name</td>";
echo "  <td>Address</td><td>Phone</td><td>Email</td>";
echo " <td>Action 1</td><td>Action 2</td>";
echo "</tr>";

// echo "<table>";
include "connect.php";

$sql = "SELECT id, name, address, phone, email " 
		. "FROM phonebook";

$res = mysqli_query($link, "SELECT * FROM phonebook");


//foreach ($res as $row){
while($baris = mysqli_fetch_array($res)){
	$id = $baris['id'];
	echo "<tr>";
	echo "<td>" . $baris['id'] . "</td>";
	echo "<td>" . $baris['name'] . "</td>";
	echo "<td>" . $baris['address'] . "</td>";
	echo "<td>" . $baris['phone'] . "</td>";
	echo "<td>" . $baris['email'] . "</td>";
	echo "<td><a href='delete.php?id=$baris[id]'>Delete</a></td>";
    echo "<td><a href='edit.php?id=$baris[id]'>Edit</a></td>"; 
	echo "</tr>";

}


echo "</table>";
mysqli_close($link);?>

<form action="form.html">
	<input type="submit" name="new" value="New phonebook">
</form>
</body>
</html>
