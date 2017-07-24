<?php
require_once("db.php");
$sql = "DELETE FROM tracking WHERE Id='" . $_GET["Id"] . "'";
mysqli_query($conn,$sql);
header("Location:home.php");
?>