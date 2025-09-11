<?php
include "connection.php";
session_start();

if (isset($_POST["logbtn"])) {
  $name = $_POST["username"];
  $password = $_POST["password"];
  $account_type = $_POST["account-type"];

  if ($account_type == "student") {
      $sql = "SELECT * FROM student WHERE Sname='$name' AND Spassword='$password'";
      $result = mysqli_query($conn, $sql);

      if (!$row = mysqli_fetch_assoc($result)) {
          echo "Your username or password is incorrect!";
      } else {
        $_SESSION['username'] = $row['Sname'];
        $_SESSION['teli'] = $row['Teli'];
        $_SESSION['whats'] = $row['whatsapp'];
        $_SESSION['Addres'] = $row['Ad'];
        $_SESSION['grade'] = $row['Grade'];

        $sid = $row['Sid'];
        
        $sql2 = "SELECT * FROM payment WHERE Sid = '$sid'";
        $result2 = mysqli_query($conn, $sql2);

        if ($row = mysqli_fetch_assoc($result2)){
            $_SESSION['Sdate'] = $row['date'];
            $_SESSION['payment'] = $row['pyt'];
        }
        $_SESSION['Studentid'] = $row['Sid'];
        

          echo "Student logged in<br>";
          echo "Welcome student";
          header("Location:dashboard.php");
      }
  } else if ($account_type == "teacher") {
      $sql = "SELECT * FROM teacher WHERE name='$name' AND password='$password'";
      $result = mysqli_query($conn, $sql);

      if (!$row = mysqli_fetch_assoc($result)) {
          echo "Your username or password is incorrect!";
      } else {

        $_SESSION['teachid'] = $row['Tid'];
        $_SESSION['tname'] = $row['Name'];
        $_SESSION['ttel'] = $row['Tel'];
        $_SESSION['twh'] = $row['Whatsapp'];
        $_SESSION['taddr'] = $row['Addresss'];
        $_SESSION['tgrade'] = $row['Tgrade'];

          echo "Teacher logged in<br>";
          echo "Welcome teacher";
          header("Location:teacherdashboard.php");
      }
  } else if ($account_type == "admin") {
      $sql = "SELECT * FROM admin WHERE name='$name' AND password='$password'";
      $result = mysqli_query($conn, $sql);

      if (!$row = mysqli_fetch_assoc($result)) {
          echo "Your username or password is incorrect!";
      } else {
          echo "Admin logged in<br>";
          echo "Welcome admin";
          header("Location: AdminPanel.html");
      }
  }
}

mysqli_close($conn);
?>