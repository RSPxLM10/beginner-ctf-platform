<!DOCTYPE html>
<html>
<head>
    <title>Gallery - Community Magazine</title>
</head>
<body>
    <h1>Article Gallery</h1>
    <p>Check out articles from our community:</p>
    <?php
    $upload_dir = 'uploads/';
    if (is_dir($upload_dir)) {
        $files = scandir($upload_dir);
        foreach ($files as $file) {
            if ($file != '.' && $file != '..') {
                echo "<p><a href='$upload_dir$file'>$file</a></p>";
            }
        }
    }
    ?>
    <a href="index.php">Back to Home</a>
</body>
</html>