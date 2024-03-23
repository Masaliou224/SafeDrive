<?php

$servername = "localhost";
$username = "root";
$password = "";
$bdname = "bd_SafeDrive";

$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$phone=$_POST['phone'];
$adress=$_POST['adress'];
$email=$_POST['email'];
$password=$_POST['password'];

// Create connection
$conn = new mysqli($servername, $username, $password, $bdname);




    if (isset($_POST)){

    $sql = "INSERT INTO `MyGuests` (`nom`, `prenom`, `phone`, `adress`, `email`, `password`)
    VALUES ('nom', 'prenom', 'phone', 'adress', 'email', 'password')";

    if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }


    $conn->close();

    }



?>