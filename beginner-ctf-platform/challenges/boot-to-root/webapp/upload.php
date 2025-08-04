<?php
if ($_FILES['article']['error'] == 0) {
    $filename = $_FILES['article']['name'];
    $upload_dir = 'uploads/';
    
    // Create uploads directory if it doesn't exist
    if (!is_dir($upload_dir)) {
        mkdir($upload_dir, 0777, true);
    }
    
    // VULNERABILITY: No file type checking!
    $target_path = $upload_dir . $filename;
    
    if (move_uploaded_file($_FILES['article']['tmp_name'], $target_path)) {
        echo "<h2>File uploaded successfully!</h2>";
        echo "<p>Your article: <a href='$target_path'>$filename</a></p>";
        echo "<a href='submit.php'>Upload another</a>";
    } else {
        echo "<h2>Upload failed!</h2>";
    }
} else {
    echo "<h2>No file uploaded!</h2>";
}
?>