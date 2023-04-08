<?php

$fistname = $_POST["fname"];
$lastname = $_POST["lname"];
$mobile = $_POST["number"];
$email = $_POST["email"];
$pass = $_POST["pass"];
$conn = mysqli_connect("localhost", "root", "", "login") or die("connection failed");
$sql = "INSERT INTO contactform(First_name, Last_name, Email, Mobile, Pass ) VALUES ('{$fistname}','{$lastname}','{$email}','{$mobile}', '{$pass}' )";
$result = mysqli_query($conn, $sql) or die("Query Failed!");
header("location: http://localhost/ContactForm/contact.php");
mysqli_close($conn);
?>