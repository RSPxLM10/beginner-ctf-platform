<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messi Football Academy - Elite Training & Analytics</title>
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
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
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
            color: #2c3e50;
            text-decoration: none;
        }

        .nav-links {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        .nav-links a {
            color: #2c3e50;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s;
        }

        .nav-links a:hover {
            color: #3498db;
        }

        .hero {
            background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 600"><rect fill="%23228B22" width="1200" height="600"/><circle cx="600" cy="300" r="100" fill="white" opacity="0.1"/></svg>');
            background-size: cover;
            background-position: center;
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
            background: #e74c3c;
            color: white;
            padding: 1rem 2rem;
            text-decoration: none;
            border-radius: 50px;
            font-weight: bold;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(231, 76, 60, 0.4);
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
            border: 1px solid #e9ecef;
        }

        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        .stats-section {
            background: #2c3e50;
            color: white;
            padding: 4rem 0;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }

        .stat-card {
            background: rgba(255,255,255,0.1);
            padding: 2rem;
            border-radius: 15px;
            text-align: center;
            backdrop-filter: blur(10px);
        }

        .player-comparison {
            background: white;
            padding: 4rem 0;
        }

        .comparison-grid {
            display: grid;
            grid-template-columns: 1fr 100px 1fr;
            gap: 2rem;
            margin-top: 2rem;
            align-items: center;
        }

        .player-card {
            background: linear-gradient(145deg, #f0f0f0, #ffffff);
            padding: 2rem;
            border-radius: 20px;
            text-align: center;
            box-shadow: 0 8px 25px rgba(0,0,0,0.1);
        }

        .player-image {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            background: #ddd;
            margin: 0 auto 1rem;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.9em;
            color: #666;
            border: 4px solid #3498db;
        }

        .vs-circle {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background: #e74c3c;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
            font-size: 1.5em;
            margin: 0 auto;
        }

        .admin-portal {
            background: #34495e;
            color: white;
            padding: 3rem 0;
            text-align: center;
        }

        .portal-buttons {
            display: flex;
            justify-content: center;
            gap: 2rem;
            margin-top: 2rem;
            flex-wrap: wrap;
        }

        .portal-btn {
            background: rgba(255,255,255,0.1);
            color: white;
            padding: 1rem 2rem;
            text-decoration: none;
            border-radius: 10px;
            border: 2px solid rgba(255,255,255,0.2);
            transition: all 0.3s;
        }

        .portal-btn:hover {
            background: rgba(255,255,255,0.2);
            border-color: rgba(255,255,255,0.5);
        }

        .footer {
            background: #2c3e50;
            color: white;
            text-align: center;
            padding: 2rem 0;
        }

        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2.5em;
            }
            
            .comparison-grid {
                grid-template-columns: 1fr;
                gap: 1rem;
            }
            
            .vs-circle {
                order: -1;
            }
        }
    </style>
</head>
<body>
    <header class="header">
        <nav class="nav container">
            <a href="#" class="logo">⚽ Messi Football Academy</a>
            <ul class="nav-links">
                <li><a href="#home">Home</a></li>
                <li><a href="#programs">Programs</a></li>
                <li><a href="#analytics">Analytics</a></li>
                <li><a href="#admin">Admin Portal</a></li>
            </ul>
        </nav>
    </header>

    <section class="hero" id="home">
        <div class="container">
            <h1>Elite Football Training</h1>
            <p>Where Champions Are Made - Professional Football Academy & Analytics Platform</p>
            <a href="#programs" class="btn">Explore Programs</a>
        </div>
    </section>

    <section class="features" id="programs">
        <div class="container">
            <h2 style="text-align: center; font-size: 2.5em; margin-bottom: 1rem;">Our Programs</h2>
            <p style="text-align: center; font-size: 1.2em; color: #666;">World-class training programs designed by Leo Messi himself</p>
            
            <div class="features-grid">
                <div class="feature-card">
                    <h3>🏆 Elite Youth Academy</h3>
                    <p>Comprehensive training program for young talents aged 8-18. Focus on technical skills, tactical awareness, and mental preparation.</p>
                </div>
                <div class="feature-card">
                    <h3>📊 Performance Analytics</h3>
                    <p>Advanced data analysis using AI and machine learning to track player development and optimize training programs.</p>
                </div>
                <div class="feature-card">
                    <h3>🎯 Professional Development</h3>
                    <p>Career guidance and professional development for players transitioning to professional football clubs worldwide.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="player-comparison" id="analytics">
        <div class="container">
            <h2 style="text-align: center; font-size: 2.5em; margin-bottom: 1rem;">Legend Comparison</h2>
            <p style="text-align: center; font-size: 1.2em; color: #666; margin-bottom: 2rem;">Statistical analysis of football's greatest players</p>
            
            <div class="comparison-grid">
                <div class="player-card">
		    <div class="player-image">
    			<img src="images/messi.jpg" alt="Lionel Messi" style="width: 100%; height: 100%; border-radius: 50%; object-fit: cover;">
		    </div> 
                    <h3>Lionel Messi</h3>
                    <p><strong>Goals:</strong> 672+ Career Goals</p>
                    <p><strong>Assists:</strong> 268+ Career Assists</p>
                    <p><strong>Ballon d'Or:</strong> 7 Times</p>
                    <p><strong>World Cup:</strong> 2022 Winner</p>
                    <p><strong>Club Titles:</strong> 35+</p>
                </div>

                <div class="vs-circle">VS</div>

                <div class="player-card">
		    <div class="player-image">
    			<img src="images/ronaldo.jpg" alt="Cristiano Ronaldo" style="width: 100%; height: 100%; border-radius: 50%; object-fit: cover;">
		    </div>
                    <h3>Cristiano Ronaldo</h3>
                    <p><strong>Goals:</strong> 850+ Career Goals</p>
                    <p><strong>Assists:</strong> 230+ Career Assists</p>
                    <p><strong>Ballon d'Or:</strong> 5 Times</p>
                    <p><strong>Euro Cup:</strong> 2016 Winner</p>
                    <p><strong>Club Titles:</strong> 32+</p>
                </div>
            </div>
        </div>
    </section>

    <section class="stats-section">
        <div class="container">
            <h2 style="text-align: center; font-size: 2.5em; margin-bottom: 1rem;">Academy Statistics</h2>
            
            <div class="stats-grid">
                <div class="stat-card">
                    <h3 style="font-size: 3em; color: #3498db;">500+</h3>
                    <p>Graduated Players</p>
                </div>
                <div class="stat-card">
                    <h3 style="font-size: 3em; color: #e74c3c;">95%</h3>
                    <p>Success Rate</p>
                </div>
                <div class="stat-card">
                    <h3 style="font-size: 3em; color: #f39c12;">50+</h3>
                    <p>Professional Clubs</p>
                </div>
                <div class="stat-card">
                    <h3 style="font-size: 3em; color: #27ae60;">15</h3>
                    <p>Years Experience</p>
                </div>
            </div>
        </div>
    </section>

    <section class="admin-portal" id="admin">
        <div class="container">
            <h2 style="font-size: 2.5em; margin-bottom: 1rem;">🔐 Staff Portal Access</h2>
            <p style="font-size: 1.2em; margin-bottom: 2rem;">Secure access to academy management systems</p>
            
            <div class="portal-buttons">
                <a href="ftp-access.php" class="portal-btn">📁 File Management System</a>
                <a href="ssh-terminal.php" class="portal-btn">💻 Server Administration</a>
                <a href="database.php" class="portal-btn">🗄️ Player Database</a>
                <a href="analytics.php" class="portal-btn">📊 Analytics Dashboard</a>
            </div>
            
            <div style="margin-top: 2rem; padding: 1rem; background: rgba(231, 76, 60, 0.2); border-radius: 10px; border-left: 4px solid #e74c3c;">
                <p><strong>🎯 Penetration Testing Challenge:</strong></p>
                <p>Multiple services are running on this network. Can you enumerate and compromise all systems?</p>
                <p><strong>Target Services:</strong> FTP (Port 21), SSH (Port 22), MySQL (Port 3306), Web (Port 80)</p>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <p>&copy; 2024 Messi Football Academy. All rights reserved. | Elite Training • Professional Development • Global Network</p>
        </div>
    </footer>
</body>
</html>
