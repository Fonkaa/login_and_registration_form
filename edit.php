<?php
$conn = new mysqli("127.0.0.1", "root", "", "myapp", 3307);

$id = $_GET['id'];

$result = $conn->query("SELECT * FROM users WHERE id=$id");
$row = $result->fetch_assoc();
?>

<form method="POST">

    <label>Full Name:</label><br>
    <input type="text" name="fullname" value="<?= $row['fullname'] ?>"><br><br>

    <label>Username:</label><br>
    <input type="text" name="username" value="<?= $row['username'] ?>"><br><br>

    <label>Department:</label><br>
    <input type="text" name="department" value="<?= $row['department'] ?>"><br><br>

    <button type="submit">Update</button>
</form>

<?php
if ($_POST) {
    $conn->query("UPDATE users SET 
        fullname='$_POST[fullname]',
        username='$_POST[username]',
        department='$_POST[department]'
        WHERE id=$id
    ");

    header("Location: view.php");
}
?>