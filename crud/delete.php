<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
$id = $_GET['deleteid'];

$sql = "delete from `crudt` where id='$id'";
$rslt = mysqli_query($con, $sql);
if($rslt){
    header('location:display.php');
}else{
    die(mysqli_error($con));
}
}
?>