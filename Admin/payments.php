<?php
include_once 'connect.php';
if(isset($_POST['submit']))
{    
     $sid = $_POST['sid'];
     $grade = $_POST['grade'];
     $amount = $_POST['amount'];
     $date = $_POST['date'];
     
     $sql = "INSERT INTO payment (sid,grade,amount,date)
     VALUES ('$sid','$grade','$amount','$date')";
     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>