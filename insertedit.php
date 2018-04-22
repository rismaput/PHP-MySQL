<?php
include 'connect.php';
$id             = $_POST['id'];
$nama           = $_POST['name'];
$alamat	        = $_POST['alamat'];
$phone          = $_POST['phone'];
$email          = $_POST['email'];

$query = "UPDATE phonebook SET name='$nama',address ='$alamat', phone='$phone', email='$email' where id='$id'";
mysqli_query($link, $query);
header("location:select.php");
?>