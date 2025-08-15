k<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real Madrid Analytics - Executive Dashboard</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #ffffff 0%, #f5f5f5 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .login-container {
            background: white;
            padding: 3rem;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.1);
            max-width: 500px;
            width: 100%;
            text-align: center;
        }
        .logo {
            font-size: 2.5em;
            color: #1a1a1a;
            margin-bottom: 0.5rem;
            font-weight: bold;
        }
        .subtitle {
            color: #666;
            margin-bottom: 2rem;
            font-size: 1.1em;
        }
        .form-group {
            margin-bottom: 1.5rem;
            text-align: left;
        }
        label {
            display: block;
            margin-bottom: 0.5rem;
            color: #333;
            font-weight: 500;
        }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 1rem;
            border: 2px solid #e0e0e0;
            border-radius: 10px;
            font-size: 1em;
            transition: border-color 0.3s;
        }
        input[type="text"]:focus, input[type="password"]:focus {
            outline: none;
            border-color: #007bff;
        }
        .login-btn {
            width: 100%;
            background: linear-gradient(45deg, #007bff, #0056b3);
            color: white;
            padding: 1rem;
            border: none;
            border-radius: 10px;
            font-size: 1.1em;
            font-weight: bold;
            cursor: pointer;
            transition: transform 0.3s;
        }
        .login-btn:hover {
            transform: translateY(-2px);
        }
        .info-box {
            background: #f8f9fa;
            padding: 1.5rem;
            border-radius: 10px;
            margin-top: 2rem;
            border-left: 4px solid #007bff;
        }
        .stats {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1rem;
            margin-top: 1rem;
        }
        .stat-item {
            background: white;
            padding: 1rem;
            border-radius: 8px;
            text-align: center;
            border: 1px solid #e0e0e0;
        }
        .stat-number {
            font-size: 1.5em;
            font-weight: bold;
            color: #007bff;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="logo">⚪ Real Madrid Analytics</div>
        <p class="subtitle">Executive Performance Dashboard</p>
        
        <form action="auth.php" method="POST">
            <div class="form-group">
                <label for="username">Executive Username</label>
                <input type="text" id="username" name="username" placeholder="Enter your username" required>
            </div>
            
            <div class="form-group">
                <label for="password">Secure Password</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
            </div>
            
            <button type="submit" class="login-btn">🔐 ACCESS DASHBOARD</button>
        </form>
        
        <div class="info-box">
            <h4>🏆 Real Madrid Performance Analytics</h4>
            <p>Advanced data analytics platform for club executives and coaching staff</p>
            
            <div class="stats">
                <div class="stat-item">
                    <div class="stat-number">847</div>
                    <div>Data Points</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">15</div>
                    <div>Championships</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">99.2%</div>
                    <div>Accuracy</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">24/7</div>
                    <div>Monitoring</div>
                </div>
            </div>
            
            <p style="margin-top: 1rem; font-size: 0.9em; color: #666;">
                <strong>Hint:</strong> Database authentication system may have legacy vulnerabilities
            </p>
        </div>
    </div>
</body>
</html>
