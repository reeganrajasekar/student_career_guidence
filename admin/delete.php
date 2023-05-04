<?php
require("./layout/db.php");
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$id = test_input($_POST['id']);

$sql = "DELETE FROM course WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    header("Location: /admin/course.php?page=1&msg=Course Deleted Successfully !");
    die();
} else {
    header("Location: /admin/course.php?page=1&err=Something went Wrong!");
    die();
}


?>