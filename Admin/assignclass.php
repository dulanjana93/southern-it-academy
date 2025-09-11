<?php
include_once 'connect.php';
if(isset($_POST['submit']))
{    
     $tid = $_POST['tid'];
     $grade = $_POST['grade'];
     

     $sql = "INSERT INTO assignclass (tid,grade)
     VALUES ('$tid','$grade')";
     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>