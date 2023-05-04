<?php
require("./admin/layout/db.php");

$email = $_POST["email"];
$password = $_POST["password"];

$sql = "SELECT * FROM student WHERE email='$email' AND password='$password'";
$result = $conn->query($sql);
if($result->num_rows>0){
    while($row = $result->fetch_assoc()){
        setcookie("id",$row["id"],time() + 2 * 24 * 60 * 60);
        setcookie("name",$row["name"],time() + 2 * 24 * 60 * 60);
        setcookie("total",$row["total"],time() + 2 * 24 * 60 * 60);
        setcookie("gro",$row["gro"],time() + 2 * 24 * 60 * 60);
        setcookie("ten",$row["ten"],time() + 2 * 24 * 60 * 60);
        setcookie("cut",$row["cut"],time() + 2 * 24 * 60 * 60);
        header("Location:/home.php");
        die();
    }
}else{
    header("Location:/login.php?err=Email or Password is Wrong!");
    die();
}
?>