<?php
include 'connect.php';
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

<div class="container">
    <button class="btn btn-primary my-5"> <a href="marks.php" class="text-light">Add Marks</a>
        </button>
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