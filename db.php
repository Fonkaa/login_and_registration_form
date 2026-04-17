<?php
$conn = new mysqli("127.0.0.1", "root", "", "myapp", 3307);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
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
?>
