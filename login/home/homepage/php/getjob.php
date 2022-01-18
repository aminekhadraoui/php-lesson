<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "freelance";
session_start();
$name=$_POST["user"];
$user = $_SESSION["username"];
$email = $_POST["email"];
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO getjob 
  VALUES ('$user', '$email','$name')";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "New record created successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
header('Location:../index.php');
?>