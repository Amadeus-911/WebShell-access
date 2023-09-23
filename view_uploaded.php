<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Uploaded Image</title>
    <link rel="stylesheet" href="styles.css">
    <style>
    /* Additional CSS for image container */
    .image-container {
        width: 200px;
        height: 200px;
        overflow: hidden;
    }

    .image-container img {
        width: 100%;
        height: 100%;
        object-fit: contain;
        /* Ensure the image covers the container */
    }
    </style>
</head>

<body>
    <nav class="navbar">
        <ul>
            <li><a href="/index.html">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>
    <div class="container">
        <h1>Uploaded Image</h1>
        <div class="image-container">
            <?php
            // Check if 'file' query parameter exists
            if (isset($_GET['file'])) {
                $fileName = $_GET['file'];
                $filePath = "C:/xampp/htdocs/sample-file-upload/uploads/" . $fileName;

                // Check if the file exists
                if (file_exists($filePath)) {
                    echo "<img src='uploads/{$fileName}' alt='Uploaded Image'>";
                } else {
                    echo "File not found.";
                }
            } else {
                echo "No file specified.";
            }
            ?>
        </div>
    </div>
</body>

</html>