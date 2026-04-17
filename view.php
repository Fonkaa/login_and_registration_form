<?php
$conn = new mysqli("127.0.0.1", "root", "", "myapp", 3307);

$result = $conn->query("SELECT * FROM users");
?>

<h2>All Users</h2>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>fullname</th>
        <th>username</th>
        <th>Department</th>
        <th>Gender</th>
        <th>Hobbies</th>
        <th>Others</th>
        <th>password</th>
        <th>Actions</th>
    </tr>

<?php while($row = $result->fetch_assoc()) { ?>
<tr>
    <td><?= $row['id'] ?></td>
    <td><?= $row['fullname'] ?></td>
    <td><?= $row['username'] ?></td>
    <td><?= $row['department'] ?></td>
    <td><?= $row['gender'] ?></td>
    <td><?= $row['hobbies'] ?></td>
    <td><?= $row['others'] ?></td>
    <td><?= $row['passsword'] ?></td>

            <td>
        <a href="edit.php?id=<?= $row['id'] ?>">Edit</a> |
        <a href="delete.php?id=<?= $row['id'] ?>">Delete</a>
    </td>

    
</tr>
<?php } ?>

</table>