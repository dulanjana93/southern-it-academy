<?php

include_once 'connect.php';
$tid=$_GET['fuck'];
$sql=" SELECT * FROM crudlec WHERE tid=$tid";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$tid=$row['tid'];
$grade=$row['grade'];
$topic=$row['topic'];
$link=$row['link'];

if(isset($_POST['submit']))
{    
    $tid=$_POST['tID'];
    $grade=$_POST['Grade'];
    $topic=$_POST['Topic'];
    $link=$_POST['Link'];

     $sql = " UPDATE crudlec SET tid=$tid, grade=$grade, topic='$topic', link='$link' WHERE tid=$tid  ";
     if (mysqli_query($conn, $sql)) {
        //echo "Updated successfully !";
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
    <input type="text" class="form-control" name="tID" placeholder="Enter tID" value=<?php echo $tid;?> >
  </div>

  <div class="form-group">
    <label>Grade</label>
    <input type="text" class="form-control" name="Grade" placeholder="Enter Grade" value=<?php echo $grade;?> >
  </div>

  <div class="form-group">
    <label for="Topic">Topic</label>
    <input type="text" class="form-control" name="Topic" placeholder="Enter Topic" value=<?php echo $topic;?> >
  </div>

  <div class="form-group">
    <label for="Link">Lecture Link</label>
    <input type="text" class="form-control" name="Link" placeholder="Enter Link" value=<?php echo $link;?> >
  </div>

  

  <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>
    </div>

    
  </body>
</html>