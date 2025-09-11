<?php
include "connect.php";

// Create connection
if (isset($_POST["logbtn"])) {
  $name = $_POST["username"];
  $password = $_POST["password"];
  $account_type=$_POST["account-type"];


  
  if($account_type=="student"){
      $sql = "SELECT * FROM student WHERE name='$name' AND password='$password'";
      $result = mysqli_query($conn, $sql);
    
      if (!$row = mysqli_fetch_assoc($result)) {
        echo "<script>alert('incorrect username or password')</script>";
        echo "Your username or password is incorrect! <br><br>";
        echo "<button style='background-color: #f44336; color: white; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer;' onclick='history.go(-1);'>Return</button>";

     
      } else {
          echo "<span style='color: #4CAF50; font-family: Arial, sans-serif;'>Student loged</span><br><br>";
           echo "<span style='color: #ff0000; font-family: Arial, sans-serif;'>Welcome!</span>";
          echo "<script>alert('Student loged..');
          </script>";
      }
  }else if($account_type=="teacher"){
      $sql = "SELECT * FROM teacher WHERE name='$name' AND password='$password'";
      $result = mysqli_query($conn, $sql);
    
      if (!$row = mysqli_fetch_assoc($result)) {
        echo "<script>alert('incorrect username or password')</script>";
        echo "Your username or password is incorrect! <br><br>";
        echo "<button style='background-color: #f44336; color: white; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer;' onclick='history.go(-1);'>Return</button>";
      } else {
        echo "You are logged in! <br><br>";
        echo "welcome !";
        echo "<script>alert('Teacher loged ..');
          </script>";
      } 
  

} else if ($account_type == "admin") {
  $sql = "SELECT * FROM users WHERE username='$name' AND password='$password'";
  $result = mysqli_query($conn, $sql);

  if (!$row = mysqli_fetch_assoc($result)) {
    echo "<script>alert('incorrect username or password')</script>";
    echo "Your username or password is incorrect! <br><br>";
    echo "<button style='background-color: #f44336; color: white; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer;' onclick='history.go(-1);'>Return</button>";
  } else {
    echo "You are logged in! <br><br>";
    echo "welcome !";
    echo "<script>alert('Admin loged ..');
          </script>";
          header("Location: AdminPanel.html");
  }
}
 
}

mysqli_close($conn);