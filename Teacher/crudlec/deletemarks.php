<?php
include 'connect.php';
if(isset($_GET['deletetid'])){
    $sid=$_GET['deletetid'];

$sql= "DELETE FROM marks WHERE sid=$sid";
$result=mysqli_query($conn,$sql);
if($result){
    //echo "DEleted Successfully.";
    header('location:displaymarks.php');
}else{
    die(mysqli_error($conn));
}


}





?>