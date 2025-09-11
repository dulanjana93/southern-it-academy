<?php

/*include 'connect.php';
if(isset($_POST['submit'])){

    $tid=$_POST['tID'];
    $grade=$_POST['Grade'];
    $topic=$_POST['Topic'];
    $link=$_POST['Link'];

 

$sql = "INSERT INTO crudlec VALUES ('$tid', '$grade', '$topic', '$link')";

}   


if ($con->query($sql) === TRUE) {
    echo "Table insertion Succesfull!";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

// Close database connection
$con->close();

*/

include_once 'connect.php';
if(isset($_POST['submit']))
{    
    $tid=$_POST['tID'];
    $grade=$_POST['Grade'];
    $topic=$_POST['Topic'];
    $link=$_POST['Link'];

     $sql = "INSERT INTO crudlec (tid,grade,topic,link)
     VALUES ('$tid','$grade','$topic','$link')";
     if (mysqli_query($conn, $sql)) {
        //echo "New record has been added successfully !";
        header('location:display.php');
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
    <label>tID</label>
    <input type="text" class="form-control" name="tID" placeholder="Enter tID">
  </div>

  <div class="form-group">
    <label>Grade</label>
    <input type="text" class="form-control" name="Grade" placeholder="Enter Grade">
  </div>

  <div class="form-group">
    <label for="Topic">Topic</label>
    <input type="text" class="form-control" name="Topic" placeholder="Enter Topic">
  </div>

  <div class="form-group">
    <label for="Link">Lecture Link</label>
    <input type="text" class="form-control" name="Link" placeholder="Enter Link">
  </div>

  

  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
    </div>

    
  </body>
</html>