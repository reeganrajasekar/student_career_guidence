<?php 
require("./admin/layout/db.php");

$name = $_POST["name"];
$password = $_POST["password"];
$mobile = $_POST["mobile"];
$email = $_POST["email"];
$gro = $_POST["gro"];
$total = $_POST["total"];
$cut = $_POST["cut"];
$ten = $_POST["ten"];

$sql = "INSERT INTO student(name,password,mobile,email,gro,total,cut,ten) VALUES('$name','$password','$mobile','$email','$gro','$total','$cut','$ten');";

try {
    $conn->query($sql);
    header("Location:/login.php?msg=Account Created Successfully!");
    die();
} catch (Exception $e) {
    header("Location:/login.php?err=Something Went Wrong!");
    die();
}

?>