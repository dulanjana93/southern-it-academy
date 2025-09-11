<?php
include_once 'connect.php';
if(isset($_POST['register']))
{    
     $sid = $_POST['sid'];
     $name = $_POST['name'];
     $telephone = $_POST['telephone'];
     $address = $_POST['address'];
     $gender = $_POST['gender'];
     $grade = $_POST['grade'];
     $password = $_POST['password'];

     $sql = "INSERT INTO student (sid,name,telephone,address,gender,grade,password)
     VALUES ('$sid','$name','$telephone','$address','$gender','$grade','$password')";
     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>