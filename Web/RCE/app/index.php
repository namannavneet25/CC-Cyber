<?php
$dir = "uploads/";
$images = array_diff(scandir($dir), array('.', '..'));
?>

<!DOCTYPE html>
<html>
<head>
    <title>SnapCDN - Image Gallery</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #0f172a;
            color: white;
            margin: 0;
        }

        header {
            padding: 20px;
            text-align: center;
            background: #1e293b;
            font-size: 24px;
            font-weight: bold;
        }

        .upload-box {
            text-align: center;
            margin: 20px;
        }

        input[type="file"] {
            padding: 10px;
        }

        button {
            padding: 10px 20px;
            background: #38bdf8;
            border: none;
            color: black;
            font-weight: bold;
            cursor: pointer;
        }

        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 15px;
            padding: 20px;
        }

        .card {
            background: #1e293b;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0,0,0,0.5);
        }

        .card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .filename {
            padding: 10px;
            font-size: 12px;
            word-break: break-all;
        }
    </style>
</head>

<body>

<header>📸 SnapCDN Gallery</header>

<div class="upload-box">
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="fileToUpload" required>
        <button type="submit">Upload</button>
    </form>
</div>

<div class="gallery">
    <?php foreach($images as $img): ?>
        <div class="card">
            <img src="uploads/<?php echo $img; ?>">
            <div class="filename"><?php echo $img; ?></div>
        </div>
    <?php endforeach; ?>
</div>

</body>
</html>
