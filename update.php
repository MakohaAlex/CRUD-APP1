<?php
include 'db_connect.php';
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM items WHERE id=$id");
$item = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Edit Item</title>
</head>
<body>
    <div class="container">
        <h1>Edit Item</h1>
        <form action="save.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $item['id']; ?>">
            <input type="text" name="name" value="<?php echo $item['name']; ?>" required>
            <textarea name="description" required><?php echo $item['description']; ?></textarea>
            <button type="submit" name="save">Save Changes</button>
        </form>
    </div>
</body>
</html>
