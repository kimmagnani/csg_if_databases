<!DOCTYPE html>
<html>
<meta http-equiv='refresh' content='0; URL=homescreen.php'>

</html>
<?php
include('connection.php');
?>
<?php
$sql = "INSERT INTO `Posts`(`Recept`, `Bereidingswijze`, `Bereidingstijd`) VALUES ('" . $_POST["Receptnaam"] . "','" . $_POST["bereidingswijze"] . "','" . $_POST["Tijd"] . "')";
$dbid = 0;
$records = mysqli_query($con, $sql);
if (mysqli_num_rows($records) > 0) {
    while ($dbid = mysqli_fetch_assoc($records)) {
    }
}
