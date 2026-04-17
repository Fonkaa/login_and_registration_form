<?php
session_start();
include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST['username'];
    $passsword = $_POST['passsword'];

    $sql = "SELECT * FROM users 
            WHERE username='$username' AND passsword='$passsword'";

    $result = $conn->query($sql);

    if ($result->num_rows == 1) {

        $user = $result->fetch_assoc();

        $_SESSION['username'] = $user['username'];

        // ONLY SUCCESS MESSAGE (NO REDIRECT)
        echo "<h2>Login Successful ✔</h2>";
        echo "Welcome " . $user['fullname'];

    } else {

        echo "<h2>Login Failed ❌</h2>";
        echo "Invalid username or password";
    }
}
?>