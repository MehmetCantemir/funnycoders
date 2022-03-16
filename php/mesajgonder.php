<?php 
$servername = "92.205.12.157";
$database = "funnycoders";
$username = "talha";
$password = "Luna1park.";

// Create connection

$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . 
mysqli_connect_error());
}

$mail = $_GET['email'];
$ad = $_GET['name'];
$mesaj = $_GET['message'];

$sql = "INSERT INTO mesajlar (mail,ad,mesaj) VALUES ('$mail','$ad','$mesaj')";
$sorgu=mysqli_query($conn,$sql);


header("location:../index.html");

mysqli_free_result($sorgu);

mysqli_close($conn);


?>