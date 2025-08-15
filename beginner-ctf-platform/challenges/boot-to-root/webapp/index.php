<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FC Barcelona Corporate - Digital Media Platform</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
            background: linear-gradient(135deg, #004d9f 0%, #004d7a 100%);
            min-height: 100vh;
        }

        .header {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            padding: 1rem 0;
            box-shadow: 0 2px 20px rgba(0,0,0,0.1);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 2em;
            font-weight: bold;
            color: #004d9f;
            text-decoration: none;
        }

        .nav-links {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        .nav-links a {
            color: #004d9f;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s;
        }

        .nav-links a:hover {
            color: #dc143c;
        }

        .hero {
            background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 600"><rect fill="%23004d9f" width="1200" height="600"/><circle cx="600" cy="300" r="150" fill="white" opacity="0.1"/></svg>');
            background-size: cover;
            color: white;
            text-align: center;
            padding: 6rem 0;
        }

        .hero h1 {
            font-size: 3.5em;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }

        .hero p {
            font-size: 1.3em;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        .btn {
            display: inline-block;
            background: #dc143c;
            color: white;
            padding: 1rem 2rem;
            text-decoration: none;
            border-radius: 50px;
            font-weight: bold;
            transition: transform 0.3s;
        }

        .btn:hover {
            transform: translateY(-2px);
        }

        .features {
            background: white;
            padding: 4rem 0;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }

        .feature-card {
            background: #f8f9fa;
            padding: 2rem;
            border-radius: 15px;
            text-align: center;
            transition: transform 0.3s;
        }

        .feature-card:hover {
            transform: translateY(-5px);
        }

        .upload-section {
            background: #004d9f;
            color: white;
            padding: 4rem 0;
            text-align: center;
        }

        .upload-area {
            background: rgba(255,255,255,0.1);
            padding: 3rem;
            border-radius: 15px;
            max-width: 600px;
            margin: 2rem auto;
            backdrop-filter: blur(10px);
        }

        .file-input {
            background: white;
            color: #333;
            padding: 1rem;
            border: none;
            border-radius: 10px;
            width: 100%;
            margin: 1rem 0;
        }

        .upload-btn {
            background: #dc143c;
            color: white;
            padding: 1rem 3rem;
            border: none;
            border-radius: 25px;
            font-size: 1.1em;
            font-weight: bold;
            cursor: pointer;
            transition: transform 0.3s;
        }

        .upload-btn:hover {
            transform: translateY(-2px);
        }

        .footer {
            background: #333;
            color: white;
            text-align: center;
            padding: 2rem 0;
        }
    </style>
</head>
<body>
    <header class="header">
        <nav class="nav container">
            <a href="#" class="logo">⚽ FC Barcelona Corporate</a>
            <ul class="nav-links">
                <li><a href="#home">Home</a></li>
                <li><a href="#media">Media</a></li>
                <li><a href="#upload">Upload Center</a></li>
                <li><a href="#about">About</a></li>
            </ul>
        </nav>
    </header>

    <section class="hero" id="home">
        <div class="container">
            <h1>FC Barcelona Digital Media Platform</h1>
            <p>Official content management system for club media, press releases, and digital assets</p>
            <a href="#upload" class="btn">Access Upload Center</a>
        </div>
    </section>

    <section class="features" id="media">
        <div class="container">
            <h2 style="text-align: center; font-size: 2.5em; margin-bottom: 1rem;">Media Services</h2>
            <p style="text-align: center; font-size: 1.2em; color: #666;">Professional media management for FC Barcelona</p>
            
            <div class="features-grid">
                <div class="feature-card">
                    <h3>📸 Press Gallery</h3>
                    <p>High-resolution match photos, training sessions, and official club events for media distribution.</p>
                </div>
                <div class="feature-card">
                    <h3>🎥 Video Archive</h3>
                    <p>Complete video library including match highlights, player interviews, and behind-the-scenes content.</p>
                </div>
                <div class="feature-card">
                    <h3>📰 Press Releases</h3>
                    <p>Official club statements, transfer announcements, and media communications.</p>
                </div>
                <div class="feature-card">
                    <h3>🎯 Marketing Assets</h3>
                    <p>Brand guidelines, logos, promotional materials, and sponsor content for official use.</p>
                </div>
                <div class="feature-card">
                    <h3>📊 Analytics Reports</h3>
                    <p>Media performance metrics, engagement analytics, and digital asset usage statistics.</p>
                </div>
                <div class="feature-card">
                    <h3>🔐 Secure Storage</h3>
                    <p>Enterprise-grade security for confidential content, contracts, and sensitive club information.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="upload-section" id="upload">
        <div class="container">
            <h2 style="font-size: 2.5em; margin-bottom: 1rem;">📤 Media Upload Center</h2>
            <p style="font-size: 1.2em; margin-bottom: 2rem;">Secure file upload system for authorized club personnel</p>
            
            <div class="upload-area">
                <h3>Upload Media Files</h3>
                <p>Accepted formats: Images (JPG, PNG, GIF), Videos (MP4, AVI), Documents (PDF, DOC, XLS)</p>
                
                <form action="upload.php" method="POST" enctype="multipart/form-data">
                    <input type="file" name="article" class="file-input" required>
                    <br>
                    <button type="submit" class="upload-btn">🚀 UPLOAD FILE</button>
                </form>
                
                <div style="margin-top: 2rem; padding: 1rem; background: rgba(220, 20, 60, 0.2); border-radius: 10px;">
                    <p><strong>⚠️ Security Notice:</strong></p>
                    <p>All uploads are scanned for malware. Only authorized club personnel may upload files.</p>
                    <p><strong>File Size Limit:</strong> 100MB | <strong>Storage:</strong> 500GB Available</p>
                </div>
            </div>
        </div>
    </section>

    <section class="features" id="about">
        <div class="container">
            <h2 style="tex
