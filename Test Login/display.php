<?php
include 'connect.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lecture Materials</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" >

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-info">
  <div class="container">
    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
      <h3 class="navbar-text text-center text-white">
        <?php echo $_SESSION['username'];?>,
        <small class="text-light ">Welcome to the Teacher Dashboard!</small>
      </h3>
    </div>
    <div class="navbar-nav ml-auto">
      <a class="nav-item nav-link text-warning bg-dark" href="logout.php">Log out</a>
    </div>
  </div>
</nav>

<div class="container">
  
<div class="row">
  <div class="col-6">
    <button class="btn btn-primary my-5">
      <a href="user.php" class="text-light">Add Material</a>
    </button>
  </div>
  <div class="col-6 d-flex justify-content-end align-items-center" style="padding-right: 300px; padding-top: 10px;">
    <h3>Lecture Materials</h3>
  </div>
</div>


</button>

        
        <table class="table">
        
  <thead>
    <tr>
      <th scope="col">tID</th>
      <th scope="col">Grade</th>
      <th scope="col">Topic</th>
      <th scope="col">Link</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>

<?php

$sql=" SELECT* FROM crudlec ";
$result=mysqli_query($conn,$sql);
if($result){
    while($row=mysqli_fetch_assoc($result)){
        $tid=$row['tid'];
        $grade=$row['grade'];
        $topic=$row['topic'];
        $link=$row['link'];

        echo '<tr>
        <th scope="row">'.$tid.'</th>
        <td>'.$grade.'</td>
        <td>'.$topic.'</td>
        <td>'.$link.'</td>
        <td>
        <button class="btn btn-primary"><a href="update.php? fuck='.$tid.' " class="text-light">Update</a></button>
        <button class="btn btn-danger"><a href="delete.php? deletetid='.$tid.'" class="text-light">Delete</a></button>
        <button class="btn btn-warning"><a href="upload.php?" class="text-light">Upload PDF</a></button>
      </td>
      </tr>';
    }
}


?>
  </tbody>
</table>
</div>
    
<div class="container">
<div class="row">
  <div class="col-6">
    <button class="btn btn-primary my-5">
      <a href="marks.php" class="text-light">Add Marks</a>
    </button>
  </div>
  <div class="col-6 d-flex justify-content-end align-items-center" style="padding-right: 300px; padding-top: 10px;">
    <h3>Student Marks</h3>
  </div>
</div>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">sID</th>
      <th scope="col">Grade</th>
      <th scope="col">Name</th>
      <th scope="col">Marks</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>

<?php

$sql=" SELECT* FROM marks ";
$result=mysqli_query($conn,$sql);
if($result){
    while($row=mysqli_fetch_assoc($result)){
        $sid=$row['sid'];
        $grade=$row['grade'];
        $name=$row['name'];
        $marks=$row['marks'];

        echo '<tr>
        <th scope="row">'.$sid.'</th>
        <td>'.$grade.'</td>
        <td>'.$name.'</td>
        <td>'.$marks.'</td>
        <td>
        <button class="btn btn-primary"><a href="updatemarks.php? fuck='.$sid.' " class="text-light">Update</a></button>
        <button class="btn btn-danger"><a href="deletemarks.php? deletetid='.$sid.'" class="text-light">Delete</a></button>
       
      </td>
      </tr>';
    }
}


?>
 
  </tbody>
</table>
</div>



</body>
</html>