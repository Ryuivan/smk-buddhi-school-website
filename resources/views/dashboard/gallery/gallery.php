<!-- gallery.php
<?php
$conn = new mysqli("localhost", "root", "no", "gallery");

$sql = "SELECT * FROM gallery";
$result = $conn->query($sql);
?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lightbox2@2.11.3/dist/css/lightbox.min.css">
    <style>
    .image-container {
        position: relative;
    }

    .image-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0); /* Latar belakang overlay transparan */
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .image-container:hover .image-overlay {
        opacity: 1;
        background: rgba(0, 0, 0, 0.7); /* Latar belakang overlay dengan opasitas */
    }

    .overlay-text {
        color: #fff; /* Warna teks overlay */
        font-size: 1.2rem;
        font-weight: bold;
        text-align: center;
        margin-bottom: 8px;
    }

    .quick-view {
        color: #fff;
        background-color: #333;
        padding: 8px;
        border-radius: 4px;
        cursor: pointer;
    }

    .flex-center {
            display: flex;
            justify-content: center;
            align-items: center;
        }
</style>
    <title>Photo Gallery</title>
</head>
<body class="bg-gray-100">

   <!-- Navbar -->
   <nav class="bg-gray-500 text-white p-4 fixed w-full">
        <div class="container mx-auto flex justify-between items-center">
            <a href="#" class="text-xl font-bold">Photo Gallery</a>
            <div class="flex space-x-4">
                <a href="upload_form.php" class="hover:text-gray-300">Upload</a>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <div class="p-8">
        <h2 class="text-2xl font-bold my-4"></h2>
        
        <div class="flex flex-wrap flex-center"> <!-- Add the 'flex-center' class -->
            <?php while ($row = $result->fetch_assoc()) : ?>
                <div class="mt-8 m-4 image-container">
                    <a href="<?= $row["image_path"]; ?>" data-lightbox="gallery" data-title="<?= $row["title"]; ?>" onclick="openPopup(event, '<?= $row["image_path"]; ?>', '<?= $row["title"]; ?>')">
                        <div class="image-overlay" onclick="closePopup()">
                            <p class="overlay-text"><?= $row["title"]; ?></p>
                            <div class="quick-view" onclick="openPopup(event, '<?= $row["image_path"]; ?>', '<?= $row["title"]; ?>')">Quick View</div>
                        </div>
                        <img src="<?= $row["image_path"]; ?>" alt="<?= $row["title"]; ?>" class="mt-2 rounded-lg" width="200">
                    </a>
                </div>
            <?php endwhile; ?>
        </div>
    </div>

    <!-- Popup Container -->
    <div id="popupContainer" class="fixed top-0 left-0 w-full h-full flex items-center justify-center hidden bg-black bg-opacity-75" onclick="closePopup()">
        <div id="popupContent" class="text-white" onclick="event.stopPropagation();"></div>
        <div class="absolute top-0 right-0 m-4 cursor-pointer" onclick="closePopup()">Close</div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/lightbox2@2.11.3/dist/js/lightbox.min.js"></script>
    <script>
        function openPopup(event, imagePath, title) {
            event.preventDefault(); // Prevent the default behavior (navigating to the image path)
            document.getElementById("popupContent").innerHTML = `
                <img src="${imagePath}" alt="${title}" class="max-h-full max-w-full">
                <p>${title}</p>
            `;
            document.getElementById("popupContainer").style.display = "flex";
        }

        function closePopup() {
            document.getElementById("popupContainer").style.display = "none";
        }
    </script>
</body>
</html>
