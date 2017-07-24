<?php
// DB connection info
$host = "us-cdbr-azure-southcentral-f.cloudapp.net";
$user = "b7deae37d5ef2d";
$pwd = "071431a6";
$db = "gkcourier";
try{
    $conn = new PDO( "mysql:host=$host;dbname=$db", $user, $pwd);
    $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    $sql = "CREATE TABLE tracking (
Id int(11) NOT NULL AUTO_INCREMENT,
TrackId varchar(500) COLLATE utf8_unicode_ci NOT NULL,
Location text COLLATE utf8_unicode_ci NOT NULL,
InsertDate timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
PRIMARY KEY (Id)
)";
    $conn->query($sql);
}
catch(Exception $e){
    die(print_r($e));
}
echo "<h3>Table created.</h3>";
?>

