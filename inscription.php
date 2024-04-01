<?php

$servername = "localhost";
$username = "root";
$userPassword = "";
$dbname = "bd_SafeDrive";

$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$phone=$_POST['phone'];
$adress=$_POST['adress'];
$email=$_POST['email'];
$password=$_POST['password'];


// Create connection
$conn = mysqli_connect($servername, $username, $userPassword, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


$sql = "INSERT INTO user (nom, prenom, phone, adress, email, password)
VALUES ('$nom', '$prenom', '$phone', '$adress', '$email', '$password')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);



?>