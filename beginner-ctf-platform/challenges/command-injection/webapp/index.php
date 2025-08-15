<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arsenal FC - Network Operations Center</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #db0007 0%, #023474 100%);
            color: white;
            min-height: 100vh;
        }
        .header {
            background: rgba(0,0,0,0.8);
            padding: 1rem 0;
            backdrop-filter: blur(10px);
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
            color: #ffd700;
        }
        .main {
            padding: 4rem 0;
            text-align: center;
        }
        .hero h1 {
            font-size: 3em;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }
        .tool-section {
            background: rgba(255,255,255,0.1);
            padding: 3rem;
            border-radius: 20px;
            margin: 2rem auto;
            max-width: 800px;
            backdrop-filter: blur(10px);
        }
        .network-form {
            background: rgba(0,0,0,0.3);
            padding: 2rem;
            border-radius: 15px;
            margin: 2rem 0;
        }
        .input-group {
            margin: 1.5rem 0;
        }
        label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: bold;
            color: #ffd700;
        }
        input[type="text"] {
            width: 100%;
            padding: 1rem;
            border: 2px solid #ffd700;
            border-radius: 10px;
            font-size: 1.1em;
            background: rgba(255,255,255,0.9);
            color: #333;
        }
        .ping-btn {
            background: linear-gradient(45deg, #ffd700, #ffed4e);
            color: #333;
            padding: 1rem 2rem;
            border: none;
            border-radius: 25px;
            font-size: 1.2em;
            font-weight: bold;
            cursor: pointer;
            transition: transform 0.3s;
        }
        .ping-btn:hover {
            transform: translateY(-3px);
        }
        .info-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
            margin: 2rem 0;
        }
        .info-card {
            background: rgba(255,255,255,0.1);
            padding: 1.5rem;
            border-radius: 15px;
            border: 1px solid rgba(255,215,0,0.3);
        }
        .status-indicator {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: #00ff00;
            display: inline-block;
            animation: pulse 2s infinite;
        }
        @keyframes pulse {
            0% { opacity: 1; }
            50% { opacity: 0.5; }
            100% { opacity: 1; }
        }
    </style>
</head>
<body>
    <header class="header">
        <nav class="nav container">
            <div class="logo">🔴 Arsenal FC NOC</div>
            <div>Network Operations Center</div>
        </nav>
    </header>

    <main class="main">
        <div class="container">
            <div class="hero">
                <h1>🌐 Network Diagnostics Center</h1>
                <p>Professional network monitoring and diagnostic tools for Arsenal FC infrastructure</p>
            </div>

            <div class="tool-section">
                <h2>🏓 Advanced Ping Utility</h2>
                <p>Enterprise-grade network connectivity testing tool</p>
                
                <div class="network-form">
                    <form action="ping.php" method="POST">
                        <div class="input-group">
                            <label for="target">Target Host or IP Address</label>
                            <input type="text" id="target" name="target" 
                                   placeholder="arsenal.com, 8.8.8.8, or any network endpoint" required>
                        </div>
                        <button type="submit" class="ping-btn">🚀 EXECUTE PING</button>
                    </form>
                </div>

                <div class="info-grid">
                    <div class="info-card">
                        <h4><span class="status-indicator"></span> Primary DNS</h4>
                        <p>8.8.8.8 - Google DNS</p>
                        <small>Response: 12ms</small>
                    </div>
                    <div class="info-card">
                        <h4><span class="status-indicator"></span> Gateway</h4>
                        <p>192.168.1.1 - Router</p>
                        <small>Response: 1ms</small>
                    </div>
                    <div class="info-card">
                        <h4><span class="status-indicator"></span> Arsenal.com</h4>
                        <p>Official Website</p>
                        <small>Response: 45ms</small>
                    </div>
                    <div class="info-card">
                        <h4><span class="status-indicator"></span> CDN Status</h4>
                        <p>Cloudflare Active</p>
                        <small>Global: Operational</small>
                    </div>
                </div>

                <div style="background: rgba(219,0,7,0.2); padding: 1.5rem; border-radius: 10px; margin-top: 2rem; border-left: 4px solid #db0007;">
                    <h4>⚠️ Security Testing Environment</h4>
                    <p>This network diagnostic tool is configured for penetration testing purposes.</p>
                    <p><strong>Objective:</strong> Test for command injection vulnerabilities in network utilities.</p>
                    <p><strong>Hint:</strong> Input validation may not properly sanitize special characters.</p>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
