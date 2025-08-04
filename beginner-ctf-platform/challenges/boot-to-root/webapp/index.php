<!DOCTYPE html>
<html>
<head>
    <title>Submit Your Story - Messi Football Magazine</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="football-bg"></div>
    <header>
        <div class="container">
            <h1>⚽ SUBMIT YOUR STORY ⚽</h1>
            <p class="subtitle">Share Your Football Passion</p>
        </div>
    </header>
    
    <nav>
        <a href="index.php">🏠 Home</a>
        <a href="gallery.php">📸 Gallery</a>
        <a href="submit.php">📝 Submit Story</a>
    </nav>
    
    <div class="container">
        <div class="content">
            <div class="upload-area">
                <h2>📤 Upload Your Football Story</h2>
                <p>Share photos, articles, or any football content with our community!</p>
                <form action="upload.php" method="POST" enctype="multipart/form-data">
                    <p><strong>Select your file (images, documents, anything!):</strong></p>
                    <input type="file" name="article" required style="margin: 20px 0;">
                    <br><br>
                    <button type="submit">🚀 UPLOAD & SHARE!</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>