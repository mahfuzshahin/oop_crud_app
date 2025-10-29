<!DOCTYPE html>
<html>
<head>
    <title>User List</title>
</head>
<body>
<h2>User List</h2>
<a href="index.php?action=create">Add New User</a>
<br><br>

<table border="1" cellpadding="8">
    <tr>
        <th>ID</th><th>Name</th><th>Email</th><th>Actions</th>
    </tr>
    <?php while ($row = $users->fetch_assoc()): ?>
    <tr>
        <td><?= $row['id'] ?></td>
        <td><?= $row['name'] ?></td>
        <td><?= $row['email'] ?></td>
        <td>
            <a href="index.php?action=edit&id=<?= $row['id'] ?>">Edit</a> |
            <a href="index.php?action=delete&id=<?= $row['id'] ?>" onclick="return confirm('Are you sure?')">Delete</a>
        </td>
    </tr>
    <?php endwhile; ?>
</table>
</body>
</html>
