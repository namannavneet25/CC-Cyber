<?php

$target_dir = "uploads/";
if (!file_exists($target_dir)) {
    mkdir($target_dir);
}

$filename = basename($_FILES["fileToUpload"]["name"]);
$target_file = $target_dir . $filename;

if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {

    echo "Upload successful: " . htmlspecialchars($filename);

    // 🔥 Vulnerability: auto trigger uploaded file
    header("Refresh: 1; URL=" . $target_file);

} else {
    echo "Upload failed.";
}

?>
