<?php
include_once 'connect.php';
if(isset($_POST['register']))
{    
     $tid = $_POST['tid'];
     $name = $_POST['name'];
     $telephone = $_POST['telephone'];
     $address = $_POST['address'];
     $gender = $_POST['gender'];
     $password = $_POST['password'];

     $sql = "INSERT INTO teacher (tid,name,telephone,address,gender,password)
     VALUES ('$tid','$name','$telephone','$address','$gender','$password')";
     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>