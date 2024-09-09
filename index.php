<?php
include 'db_connect.php';
$result = $conn->query("SELECT * FROM items");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>CRUD App</title>
</head>
<body>
    <div class="container">
        <h1>CRUD Application</h1>

        <!-- Add New Item Form -->
        <form action="save.php" method="POST">
            <input type="text" name="name" placeholder="Enter Name" required>
            <textarea name="description" placeholder="Enter Description" required></textarea>
            <button type="submit" name="save">Save</button>
        </form>

        <!-- Display Items -->
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
            <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['description']; ?></td>
                <td>
                    <a href="update.php?id=<?php echo $row['id']; ?>">Edit</a>
                    <a href="delete.php?id=<?php echo $row['id']; ?>" class="delete-btn">Delete</a>
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>
