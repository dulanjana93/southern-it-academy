<?php
$servername ="localhost";
$username ="root";
$password ="";
$dbname = "crudoperation";

$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("Connection Failed". $conn->connect_error);

}

if(isset($_POST['submit'])){
    $targetDir = "uploads/";
    $targetFile = $targetDir. basename($_FILES["pdfFile"]["name"]);
    $filetype = strtolower(pathinfo($targetFile,PATHINFO_EXTENSION));

    if($filetype!="pdf" || $_FILES["pdfFile"]["size"]>4000000){
        echo "Error: Only PDF files less than 4MB are allowed to upload.";
    }
    else{
        if(move_uploaded_file($_FILES["pdfFile"]["tmp_name"],$targetFile)){
            $filename=$_FILES["pdfFile"]["name"];
            $folder_path=$targetDir;
            $time_stamp= date('Y-m-d H:i:s');
            $sql = "INSERT INTO upload (filename, folder_path, time_stamp) VALUES ('$filename','$folder_path', '$time_stamp') ";

            if($conn->query($sql)=== TRUE){
                echo "File uploaded successfully";
            }else{
                echo "Error: " .$sql. "<br>" . $conn->error;
            }
        }else{
                echo "Error uploading File.";
            }
        }
        }
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
<title>PDF Upload Form</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<div class="container d-flex justify-content-center align-items-center" style="height: 100vh">
<div class="card">
<div class="card-header">
<h4 class="card-title text-center">Upload PDF File</h4>
</div>
<div class="card-body">
<form method="post" enctype="multipart/form-data">
<div class="form-group">
<label for="pdfFile">Select PDF File:</label>
<input type="file" name="pdfFile" class="form-control-file" id="pdfFile">
</div>
<button type="submit" name="submit" class="btn btn-primary btn-block">Upload File</button>
<button type="reset" class="btn btn-warning btn-block">Reset</button>
</form>
</div>
</div>
</div>
<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<scropt src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </body>
    </html>



    
