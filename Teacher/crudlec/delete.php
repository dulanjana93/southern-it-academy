<?php
include 'connect.php';
if(isset($_GET['deletetid'])){
    $tid=$_GET['deletetid'];

$sql= "DELETE FROM crudlec WHERE tid=$tid";
$result=mysqli_query($conn,$sql);
if($result){
    //echo "DEleted Successfully.";
    header('location:display.php');
}else{
    die(mysqli_error($conn));
}


}





?>