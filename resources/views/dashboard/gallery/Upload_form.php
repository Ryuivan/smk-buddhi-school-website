
<body class="bg-gray-100">

    <!-- Navbar -->
    <nav class="bg-gray-800 text-white p-4 fixed w-full">
        <div class="container mx-auto flex justify-between items-center">
            <a href="gallery.php" class="text-xl font-bold">Photo Gallery</a>
            <div class="flex space-x-4">
                <a href="gallery.php" class="hover:text-gray-300">Gallery</a>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <div class=" p-8">
        <h2 class="text-2xl font-bold my-4">Upload Image</h2>

        <form action="upload.php" method="post" enctype="multipart/form-data" class="mb-8">
            <label for="title" class="block mb-2">Title:</label>
            <input type="text" name="title" required class="w-full border p-2">

            <label for="image" class="block mt-4 mb-2">Image:</label>
            <input type="file" name="image" required class="mb-4">

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Upload</button>
        </form>
    </div>
</body>
</html>
