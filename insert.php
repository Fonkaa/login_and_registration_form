<?php
include "db.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$fullname=$_POST['fullname'];
$username = $_POST['username'];
$department = $_POST['department'];
$gender = $_POST['gender'];
$others = $_POST['others'];
$hobbies = "";
$passsword = $_POST['passsword'];
if (isset($_POST['hobbies'])) {
    $hobbies = implode(", ", $_POST['hobbies']);
}
$sql = "INSERT INTO users (fullname, username, department, gender, hobbies, others,passsword)
VALUES ('$fullname', '$username', '$department', '$gender', '$hobbies', '$others','$passsword')";

if ($conn->query($sql)) {
    echo "INSERT SUCCESS ✔";
} else {
    die("INSERT FAILED ❌: " . $conn->error);
}
}
?>