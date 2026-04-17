<?php
$conn = new mysqli("127.0.0.1", "root", "", "myapp", 3307);

$id = $_GET['id'];

$result = $conn->query("SELECT * FROM users WHERE id=$id");
$row = $result->fetch_assoc();
?>

<form method="POST">
    <input type="text" name="fullname" value="<?= $row['fullname'] ?>">
    <input type="text" name="username" value="<?= $row['username'] ?>">
    <input type="text" name="department" value="<?= $row['department'] ?>">
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