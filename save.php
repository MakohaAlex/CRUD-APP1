<?php
include 'db_connect.php';

if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $description = $_POST['description'];

    if (!empty($_POST['id'])) {
        // Update Record
        $id = $_POST['id'];
        $conn->query("UPDATE items SET name='$name', description='$description' WHERE id=$id");
    } else {
        // Insert New Record
        $conn->query("INSERT INTO items (name, description) VALUES ('$name', '$description')");
    }

    header('Location: index.php');
}
?>
