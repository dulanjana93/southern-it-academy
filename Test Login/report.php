<?php

// MySQL database connection variables
$host = "localhost";
$user = "root";
$password = "";
$database = "crudoperation";

// Connect to MySQL server
$conn = mysqli_connect($host, $user, $password, $database);

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

// Retrieve data from the tables
$result_payment = mysqli_query($conn, "SELECT * FROM payment");
$result_student = mysqli_query($conn, "SELECT * FROM student");
$result_teacher = mysqli_query($conn, "SELECT * FROM teacher");
$result_assignclass = mysqli_query($conn, "SELECT * FROM assignclass");

// Print report header
echo "<h1>Database Report</h1>";

// Print payment table data
echo "<h2>Payment Table</h2>";
echo "<table border='1'>
<tr>
<th>SID</th>
<th>Grade</th>
<th>Amount</th>
<th>Date</th>
</tr>";

while ($row = mysqli_fetch_array($result_payment)) {
    echo "<tr>";
    echo "<td>" . $row['sid'] . "</td>";
    echo "<td>" . $row['grade'] . "</td>";
    echo "<td>" . $row['amount'] . "</td>";
    echo "<td>" . $row['date'] . "</td>";
    echo "</tr>";
}

echo "</table><br><br>";

// Print student table data
echo "<h2>Student Table</h2>";
echo "<table border='1'>
<tr>
<th>SID</th>
<th>Name</th>
<th>Telephone</th>
<th>Address</th>
<th>Gender</th>
<th>Grade</th>
<th>Password</th>
</tr>";

while ($row = mysqli_fetch_array($result_student)) {
    echo "<tr>";
    echo "<td>" . $row['sid'] . "</td>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['telephone'] . "</td>";
    echo "<td>" . $row['address'] . "</td>";
    echo "<td>" . $row['gender'] . "</td>";
    echo "<td>" . $row['grade'] . "</td>";
    echo "<td>" . $row['password'] . "</td>";
    echo "</tr>";
}

echo "</table><br><br>";

// Print teacher table data
echo "<h2>Teacher Table</h2>";
echo "<table border='1'>
<tr>
<th>TID</th>
<th>Name</th>
<th>Telephone</th>
<th>Address</th>
<th>Gender</th>
<th>Password</th>
</tr>";

while ($row = mysqli_fetch_array($result_teacher)) {
    echo "<tr>";
    echo "<td>" . $row['tid'] . "</td>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['telephone'] . "</td>";
    echo "<td>" . $row['address'] . "</td>";
    echo "<td>" . $row['gender'] . "</td>";
    echo "<td>" . $row['password'] . "</td>";
    echo "</tr>";
}

echo "</table><br><br>";

// Print assignclass table data
echo "<h2>Assignclass Table</h2>";
echo "<table border='1'>
<tr>
<th>TID</th>
<th>Grade</th>
</tr>";

while ($row = mysqli_fetch_array($result_assignclass)) {
    echo "<tr>";
    echo "<td>" . $row['tid'] . "</td>";
    echo "<td>" . $row['grade'] . "</td>";
    echo "</tr>";
    }
    
    echo "</table><br><br>";
    
    // Close MySQL connection
    mysqli_close($conn);
    
    ?>
