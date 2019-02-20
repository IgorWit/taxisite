<?php
require("../Model/Credentials.php");

// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "taxidb";

//here we get values from POST massive
$project = $_POST["project"];
$nane = $_POST["name"];
$date = $_POST["date"];
$time = $_POST["time"];
$address = $_POST["address"];
$area = $_POST["area"];
// Create connection
$conn = new mysqli($host, $user, $passwd, $database);


//set charset utf-8
$conn->set_charset("utf8");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO userdb (id, project, nane, date, time, address, area)
VALUES (NULL, '$project', '$nane', '$date', '$time', '$address', '$area')";
// VALUES ('', 'fireportal', 'john', '15.05.2017', '18.00', 'Рабочая 10', 'Красногвардейский район, Днепр')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

//if we can't 

 header('Location: ../index.php');
 echo '<script>window.location.href = "../index.php";</script>';
  
//  if (headers_sent()) {
//     die("Redirect failed. Please click on this link: <a href='../index.php'>first page</a>");
// }
// else{
//     exit(header("Location: /../index.php"));
// }
?>