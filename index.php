<?php
$conn = new mysqli("localhost" , "root", "" , "info");
$result = $conn->query("SELECT * FROM user");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Status App</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- نموذج لإدخال البيانات -->
<form method="POST" action="insert.php">
    name: <input type="text" name="name" required>
    age: <input type="number" name="age" required>
    <input type="submit" value="Submit">
</form>

<!-- جدول عرض البيانات -->
<table border="1" cellpadding="5" cellspacing="0">
    <tr>
        <th>id</th><th>name</th><th>age</th><th>status</th><th>action</th>
    </tr>

    <?php while($row = $result->fetch_assoc()): ?>
    <tr>
        <td><?= $row['id'] ?></td>
        <td><?= $row['name'] ?></td>
        <td><?= $row['age'] ?></td>
        <td><?= $row['status'] ?></td>
        <td>
            <form method="POST" action="toggle.php" style="display:inline;">
                <input type="hidden" name="id" value="<?= $row['id'] ?>">
                <input type="submit" value="toggle">
            </form>
        </td>
    </tr>
    <?php endwhile; ?>
</table>

</body>
</html>