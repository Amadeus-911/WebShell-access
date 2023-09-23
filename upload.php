<?php
// if (isset($_POST['upload'])) {
//     $targetDir = "C:/xampp/htdocs/uploads/";
//     $targetFile = $targetDir . basename($_FILES["file"]["name"]);
    
//     if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile)) {
//         echo "File uploaded successfully!";
//     } else {
//         echo "Sorry, there was an error uploading your file.";
//     }
// }


if (isset($_POST['upload'])) {
    $targetDir = "C:/xampp/htdocs/sample-file-upload/uploads/";
    $targetFile = $targetDir . basename($_FILES["file"]["name"]);
    
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile)) {
        // Redirect to a new page after successful upload
        header("Location: view_uploaded.php?file=" . urlencode(basename($targetFile)));
        exit;
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}



?>