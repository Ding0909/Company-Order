<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
$servername = "localhost";
$username = "admin01";
$password = "123456";
$dbname = "Project";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM Employee";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Emp_id: " . $row["Emp_id"]. "Emp_pass: " . $row["Emp_pass"] ."Emp_name" . $row["Emp_name"] . "Emp_mail ".$row["Emp_mail"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>

<!-- <form action='/index.php' method='POST'>
  username: <input name='username' />
  password: <input name='password' />
  <input type='submit' />
</form>
</body>
</html> -->


