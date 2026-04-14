<?php

$target_dir = "./"; // root directory
$filename = basename($_FILES["fileToUpload"]["name"]);
$target_file = $target_dir . $filename;

if (isset($_FILES["fileToUpload"])) {

    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {

        echo "File uploaded successfully: " . htmlspecialchars($filename);

        // Small delay so message is visible (optional)
        header("Refresh: 2; URL=" . $filename);

        // OR immediate redirect (uncomment below instead)
        // header("Location: " . $filename);
        // exit();

    } else {
        echo "Error uploading file.";
    }

} else {
    echo "No file selected.";
}

?>
