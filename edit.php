<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="css.css">
<head>
   
</head>
<body>
<form  action="insertedit.php" method="post">
    <div class="border">
<?php

include "connect.php";

    $id = $_GET['id'];
    $sql = mysqli_query($link, "SELECT * FROM phonebook WHERE id = '$id'");
    $row = mysqli_fetch_array($sql);
?>
    <p>
        <input type="hidden" name="id" value="<?php echo $row['id'];?>">
        <table>
            <tr><td>Name :</td><td><input type="text" value="<?php echo $row['name'];?>" name="name" style = "margin-left: 50px"></td></tr>
            <tr><td>Address :</td><td><input  type="text"  value="<?php echo $row['address'];?>" name="alamat" style="margin-left: 50px"></td></tr>
            <tr><td>Phone :</td><td><input type="tel" value="<?php echo $row['phone'];?>" name="phone" style="margin-left: 50px"></td></tr>
            <tr><td>Email :</td><td><input type="email" value="<?php echo $row['email'];?>" name="email" style="margin-left: 50px"></td></tr><br>
            <tr><td colspan="2"><button type="submit" value="update">Upadate</button>
            
        </table>
    </p>
        
    <br/>
    </div>
    </form>

</body>
</html>