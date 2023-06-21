<?php
include 'connection.php';

$id = $_GET['id'];
$sql = mysqli_query($conn,"DELETE FROM class WHERE id='$id'");

if($sql)
{
    echo'<script>alert("record deleted success");windows.location.href="read.php";</script>';
}
else{
    echo" something went wrong";
}
?>