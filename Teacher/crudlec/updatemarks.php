<?php

include_once 'connect.php';
$sid=$_GET['fuck'];
$sql=" SELECT * FROM marks WHERE sid=$sid";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
        $sid=$row['sid'];
        $grade=$row['grade'];
        $name=$row['name'];
        $marks=$row['marks'];

if(isset($_POST['submit']))
{    
    $sid=$_POST['sid'];
    $grade=$_POST['grade'];
    $name=$_POST['name'];
    $marks=$_POST['marks'];

     $sql = " UPDATE marks SET sid=$sid, grade=$grade, name='$name', marks='$marks' WHERE sid=$sid  ";
     if (mysqli_query($conn, $sql)) {
        //echo "Updated successfully !";
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

    <title>Display Marks</title>
  </head>
  <body>
    <div class="container my-5" >
    <form method="post">

  <div class="form-group">
    <label>sID</label>
    <input type="text" class="form-control" name="sid" placeholder="Enter sID" value=<?php echo $sid;?> >
  </div>

  <div class="form-group">
    <label>Grade</label>
    <input type="text" class="form-control" name="grade" placeholder="Enter Grade" value=<?php echo $grade;?> >
  </div>

  <div class="form-group">
    <label for="Topic">Student Name</label>
    <input type="text" class="form-control" name="name" placeholder="Enter Name" value=<?php echo $name;?> >
  </div>

  <div class="form-group">
    <label for="Link">Marks</label>
    <input type="text" class="form-control" name="marks" placeholder="Enter Marks" value=<?php echo $marks;?> >
  </div>

  

  <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>
    </div>

    
  </body>
</html>