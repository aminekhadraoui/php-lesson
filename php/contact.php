<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "freelance";
$name= $_POST['name'];
$email=$_POST['email'];
$message = $_POST['message'];
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO contact
  VALUES ('$name', '$email', '$message')";
  $conn->exec($sql);
  echo "Message send";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>