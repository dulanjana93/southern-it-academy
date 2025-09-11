<?php
session_start();
include "connection.php";

$name =$_SESSION['username'];

$sql = "SELECT * FROM student WHERE Sname=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username);
$stmt->execute();

$result = $stmt->get_result();
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard student</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="dashboard.css">
    
</head>
<body>
  
<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Dashboard</a>
    
    <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
            <a class="nav-link" href="loging page.html">Sign out</a>
        </li>
    </ul>
</nav>
<div class="container-fluid">
    <div class="row">
        
        </nav>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2"> Student Details</h1>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h5 class="card-title">Student Details</h5>
                        </div>
                        <div class="card-body">
                            <p>Name:-<?php echo $_SESSION['username'];?></p>
                            <p>Telephone:-<?php echo $_SESSION['teli'];?></p>
                            <p>Whatsapp:-<?php echo $_SESSION['whats'];?></p>
                            <p>Address:-<?php echo $_SESSION['Addres'];?></p>
                            <p>Grade:-<?php echo $_SESSION['grade'];?></p>

                        </div>
                    </div>
                </div>
                
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h5 class="card-title">Student Payment Details</h5>
                        </div>
                        <div class="card-body">
                            <p>Student ID:-<?php echo $_SESSION['Studentid'];?></p>
                            <p>Student Date<?php echo $_SESSION['Sdate'];?></p>
                            <p>Student Payment:-<?php echo $_SESSION['payment'];?></p>
                            

                        </div>
                    </div>
                </div>
                
            </div>
        </main>
    </div>
</div>