<?php

include "connect.php";

$id = $_GET['id'];

$sql = mysqli_query($link, "DELETE FROM phonebook WHERE id='$id'");

//$res = mysqli_query($link, "SELECT * FROM phonebook");

header('location: select.php');
?>