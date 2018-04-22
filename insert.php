<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="css.css">
<body>
<div class="border">
<?php

include "connect.php";

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$phone = $_POST['phone'];
$email = $_POST['email'];

$sql = "INSERT INTO phonebook (name, address, phone, email) " 
		. "VALUES ('$nama','$alamat','$phone','$email')";

$res = mysqli_query($link, $sql);
if ($res) echo "Data berhasil disimpan";
	else echo mysqli_error($link);

mysqli_close($link);


?>
<form action="form.html"><br>
	<input type="submit" name="new" value="New Phonebook"><br><br>
</form>
<form action="select.php">
	<input type="submit" name="data" value="Lihat data">
</form>
</div>
</body>
</html>