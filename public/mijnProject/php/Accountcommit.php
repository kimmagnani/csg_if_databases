<!DOCTYPE html>
<html>
<meta http-equiv='refresh' content='0; URL=homescreen.html'>

</html>
<?php
include('connection.php');
?>
<?php
$sql = "INSERT INTO `login`(`username`, `password`) VALUES ('" . $_POST["newuser"] . "','" . $_POST["newpass"] . "')";
$dbid = 0;
$records = mysqli_query($con, $sql);
if (mysqli_num_rows($records) > 0) {
    while ($dbid = mysqli_fetch_assoc($records)) {
    }
}
