<?php
include_once("db.php");
if($_REQUEST['empid']) {

    $sql = "SELECT trackid, location FROM tracking where TrackId ='".$_REQUEST['empid']."'";
    $resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
    #$data = array();
    #while( $rows = mysqli_fetch_assoc($resultset) ) {
    #    $data = $rows;
    #}
    #echo json_encode($data);

    $array = array();
    $i = 0;
    while($row=mysqli_fetch_assoc($resultset)) {
        $array[$i]['trackid']= $row['trackid'];
        $array[$i]['location']=$row['location'];
        $i++;
    }
    echo json_encode($array);
} else {
    echo 0;
}
?>

