<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "freelance";
$name= $_POST['user'];
$email=$_POST['email'];
$pass = $_POST['pass'];
$phone = $_POST['phone'];
$chose = $_POST['chose'];
$country=$_POST['country'];
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO sign
  VALUES ('$name', '$email', '$pass','$phone','$chose','$country');
  INSERT INTO connected
  VALUES ('', '$name')
  
  ";
  $conn->exec($sql);
/*echo '<script language="javascript">';
echo 'alert("message successfully sent")';
echo '</script>';*/
  
  
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
header("Location: ../home.php");
?>