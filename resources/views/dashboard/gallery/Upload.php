<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ganti 'username', 'password', dan 'dbname' sesuai dengan informasi database MySQL Anda
    $conn = new mysqli("localhost", "root", "no", "gallery");

    // Gunakan prepared statement untuk menghindari SQL Injection
    $sql = $conn->prepare("INSERT INTO gallery (title, image_path) VALUES (?, ?)");
    $sql->bind_param("ss", $title, $targetFile);

    $title = $_POST["title"];
    $targetDirectory = "uploads/";
    $targetFile = $targetDirectory . basename($_FILES["image"]["name"]);

    move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile);

    $sql->execute();

    $sql->close();
    $conn->close();
    
    header("Location: gallery.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Upload Image</title>
</head>
<body>
    <h2>Upload Image</h2>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="title">Title:</label>
        <input type="text" name="title" required><br>
        <label for="image">Image:</label>
        <input type="file" name="image" required><br>
        <input type="submit" value="Upload">
    </form>
</body>
</html>
