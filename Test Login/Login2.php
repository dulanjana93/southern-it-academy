<?php
session_start();
include 'connect.php';

// login
if (isset($_POST['logbtn'])) {
    $name = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    if ($role == "student") {
        $sql = "SELECT * FROM student WHERE name = '$name' AND password = '$password'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            
            while ($row = mysqli_fetch_assoc($result)) {
                
                
                $_SESSION['username'] = $row['name'];
                $_SESSION['telephone'] = $row['telephone'];
                $_SESSION['address'] = $row['address'];    
                $_SESSION['gender'] = $row['gender'];
                $_SESSION['grade'] = $row['grade'];
                

                $sid = $row['sid'];

                $sql2 = "SELECT * FROM marks WHERE sid = '$sid'";
                $result2 = mysqli_query($conn, $sql2);
        
                if ($row = mysqli_fetch_assoc($result2)){

                    $_SESSION['grade'] = $row['grade'];
                    $_SESSION['name'] = $row['name'];
                    $_SESSION['marks'] = $row['marks'];
                }

                $sql3 = "SELECT * FROM payment WHERE sid = '$sid'";
                $result3 = mysqli_query($conn, $sql3);
        
                if ($row = mysqli_fetch_assoc($result3)){

                    $_SESSION['grade'] = $row['grade'];
                    $_SESSION['amount'] = $row['amount'];
                    $_SESSION['date'] = $row['date'];
                }
                $_SESSION['sid'] = $row['sid'];

                $_SESSION['status'] = "Login Successful";
                $_SESSION['status_code'] = "success";
                header("Location: studentdashboard.php ");
            }

        } else {
            $_SESSION['status'] = "Login Failed";
            $_SESSION['status_code'] = "error";
            //header("Location: index.php");
            echo "login failed";
        }
    }
    if ($role == "teacher") {
        $sql = "SELECT * FROM teacher WHERE name = '$name' AND password = '$password'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            // $row = mysqli_fetch_assoc($result);
            while ($row = mysqli_fetch_assoc($result)) {
                $_SESSION['username'] = $row['name'];
                echo $_SESSION['username'];
                //$_SESSION['fname'] = $row['fname'];
                //$_SESSION['lname'] = $row['lname'];
                //$_SESSION['grade'] = $row['grade'];
                $_SESSION['status'] = "Login Successful";
                $_SESSION['status_code'] = "success";
                header("Location: display.php");
            }

        } else {
            $_SESSION['status'] = "Login Failed";
            $_SESSION['status_code'] = "error";
            //header("Location: login.php");
            echo "login failed";
        }
    }
    if ($role == "admin") {
        $sql = "SELECT * FROM admin WHERE name = '$name' AND password = '$password'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            // $row = mysqli_fetch_assoc($result);
            while ($row = mysqli_fetch_assoc($result)) {
                $_SESSION['username'] = $row['name'];
                echo $_SESSION['username'];
                //$_SESSION['fname'] = $row['fname'];
                //$_SESSION['lname'] = $row['lname'];
                //$_SESSION['grade'] = $row['grade'];
                $_SESSION['status'] = "Login Successful";
                $_SESSION['status_code'] = "success";
                header("Location: index.html");
            }

        } else {
            $_SESSION['status'] = "Login Failed";
            $_SESSION['status_code'] = "error";
            //header("Location: login.php");
            echo "login failed";
        }
    }
}
mysqli_close($conn);
//include 'includes/script.php';