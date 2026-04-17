<?php
$conn = new mysqli("127.0.0.1", "root", "", "myapp", 3307);

$id = $_GET['id'];

$conn->query("DELETE FROM users WHERE id=$id");

header("Location: view.php");
?>