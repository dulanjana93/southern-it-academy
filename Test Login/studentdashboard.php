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
        <small class="text-light ">Welcome to the Student Dashboard!</small>
      </h3>
    </div>
    <div class="navbar-nav ml-auto">
      <a class="nav-item nav-link text-warning bg-dark" href="logout.php">Log out</a>
    </div>
  </div>
</nav>


</div>


<div class="container my-5">
    
<table class="table">
  <thead>
    <h3>Student Details</h3>
    <tr>
      <th scope="col">sID</th>
      <th scope="col">Name</th>
      <th scope="col">Telephone</th>
      <th scope="col">Address</th>
      <th scope="col">Gender</th>
      <th scope="col">Grade</th>
    </tr>
  </thead>
  <tbody>


<tr>
    <th scope="row"><?php echo $_SESSION['sid'];?></th>
    <td><?php echo $_SESSION['username'];?></td>
    <td><?php echo $_SESSION['telephone'];?></td>
    <td><?php echo $_SESSION['address'];?></td>
    <td><?php echo $_SESSION['gender'];?></td>
    <td><?php echo $_SESSION['grade'];?></td>
</tr>
</tbody>
</table>
</div>


<div class="container my-5">
    
<table class="table">
  <thead>
    <h3>Student Marks</h3>
    <tr>
    <th scope="col">sID</th> 
      <th scope="col">Name</th>
      <th scope="col">Grade</th>
      <td><?php echo $_SESSION['marks'] ?? ''; ?></td>
      
    </tr>
  </thead>
  <tbody>


<tr>
    <th scope="row"><?php echo $_SESSION['sid'];?></th>
    <td><?php echo $_SESSION['username'];?></td>
    <td><?php echo $_SESSION['grade'];?></td>
    <td><?php echo $_SESSION['marks'];?></td>
    
</tr>
</tbody>
</table>
</div>

<div class="container my-5">
    
<table class="table">
  <thead>
    <h3>Payment Details</h3>
    <tr>
    <th scope="col">sID</th> 
      <th scope="col">Grade</th>
      <th scope="col">Amount (Rs.)</th>
      <th scope="col">Details</th>
      
    </tr>
  </thead>
  <tbody>


<tr>
    <th scope="row"><?php echo $_SESSION['sid'];?></th>
    <td><?php echo $_SESSION['grade'];?></td>
    <td><?php echo $_SESSION['amount'];?></td>
 <td><?php echo $_SESSION['date'] ?? ''; ?></td>

    
</tr>
</tbody>
</table>
</div>

<div class="container my-5">
<h3>Lecture Materials</h3>
<button class="btn btn-info"><a href="download.php?" class="text-light">Download PDF</a></button>
</div>
    
</body>
</html>