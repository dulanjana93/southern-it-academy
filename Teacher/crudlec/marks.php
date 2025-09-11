<?php

include_once 'connect.php';
if(isset($_POST['submit']))
{    
    $sid=$_POST['sid'];
    $grade=$_POST['grade'];
    $name=$_POST['name'];
    $marks=$_POST['marks'];

     $sql = "INSERT INTO marks (sid,grade,name,marks)
     VALUES ('$sid','$grade','$name','$marks')";
     if (mysqli_query($conn, $sql)) {
        //echo "New record has been added successfully !";
        header('location:displaymarks.php');
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}

?>






<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" >

    <title>Teacher Session</title>
  </head>
  <body>
    <div class="container my-5" >
    <form method="post">

  <div class="form-group">
    <label>sID</label>
    <input type="text" class="form-control" name="sid" placeholder="Enter sID">
  </div>

  <div class="form-group">
    <label>Grade</label>
    <input type="text" class="form-control" name="grade" placeholder="Enter Grade">
  </div>

  <div class="form-group">
    <label for="Topic">Student Name</label>
    <input type="text" class="form-control" name="name" placeholder="Enter Student Name">
  </div>

  <div class="form-group">
    <label for="Link">Marks</label>
    <input type="text" class="form-control" name="marks" placeholder="Enter Marks">
  </div>

  

  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
    </div>

    
  </body>
</html>