<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
</head>
<body>
<h2>Edit User</h2>
<form method="POST">
    <label>Name:</label>
    <input type="text" name="name" value="<?= $userData['name'] ?>" required><br><br>
    <label>Email:</label>
    <input type="email" name="email" value="<?= $userData['email'] ?>" required><br><br>
    <button type="submit">Update</button>
</form>
<br>
<a href="index.php">Back to List</a>
</body>
</html>
