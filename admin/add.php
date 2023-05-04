<?php
require("./layout/db.php");
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$course = test_input($_POST['course']);
$total = test_input($_POST['total']);
$gro = test_input($_POST['gro']);
$cut = test_input($_POST['cut']);
$ten = test_input($_POST['ten']);

$sql = "INSERT INTO course(course,total,gro,cut,ten)
VALUES ('$course','$total','$gro','$cut','$ten')";

if ($conn->query($sql) === TRUE) {
    header("Location: /admin/course.php?page=1&msg=Course Added Successfully !");
    die();
} else {
    header("Location: /admin/course.php?page=1&err=Something went Wrong!");
    die();
}


?>