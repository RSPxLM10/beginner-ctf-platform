<!DOCTYPE html>
<html>
<head>
    <title>Submit Article - Community Magazine</title>
</head>
<body>
    <h1>Submit Your Article</h1>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <p>Upload your article (images allowed):</p>
        <input type="file" name="article" required>
        <button type="submit">Submit</button>
    </form>
</body>
</html>