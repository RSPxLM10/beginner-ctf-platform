<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FTP File Management - Messi Football Academy</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #2c3e50, #34495e);
            color: white;
            padding: 2rem;
            min-height: 100vh;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background: rgba(255,255,255,0.1);
            padding: 2rem;
            border-radius: 15px;
            backdrop-filter: blur(10px);
        }
        .header {
            text-align: center;
            margin-bottom: 2rem;
        }
        .service-info {
            background: rgba(52, 152, 219, 0.2);
            padding: 1.5rem;
            border-radius: 10px;
            margin: 1rem 0;
            border-left: 4px solid #3498db;
        }
        .warning {
            background: rgba(231, 76, 60, 0.2);
            padding: 1rem;
            border-radius: 10px;
            margin: 1rem 0;
            border-left: 4px solid #e74c3c;
        }
        .code-block {
            background: #2c3e50;
            color: #f8f9fa;
            padding: 1rem;
            border-radius: 8px;
            font-family: 'Courier New', monospace;
            margin: 1rem 0;
            border: 1px solid #34495e;
        }
        .btn {
            display: inline-block;
            background: #3498db;
            color: white;
            padding: 0.8rem 1.5rem;
            text-decoration: none;
            border-radius: 5px;
            margin: 0.5rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>📁 FTP File Management System</h1>
            <p>Academy Document & Video Archive Server</p>
        </div>

        <div class="service-info">
            <h3>🗂️ Available Resources</h3>
            <ul>
                <li><strong>Training Videos:</strong> Player development footage</li>
                <li><strong>Match Analysis:</strong> Game performance data</li>
                <li><strong>Contract Documents:</strong> Player agreements (confidential)</li>
                <li><strong>Financial Reports:</strong> Academy budget information</li>
                <li><strong>Staff Records:</strong> Employee personal files</li>
            </ul>
        </div>

        <div class="warning">
            <h3>⚠️ Access Requirements</h3>
            <p><strong>FTP Server Details:</strong></p>
            <div class="code-block">
Host: localhost<br>
Port: 21<br>
Protocol: FTP<br>
Authentication: Required<br>
SSL/TLS: Disabled (Legacy System)
            </div>
            <p><strong>Note:</strong> Only authorized academy staff may access these files. Anonymous access disabled for security.</p>
        </div>

        <div class="service-info">
            <h3>💡 Connection Instructions</h3>
            <p>Use any FTP client to connect:</p>
            <div class="code-block">
# Command line FTP<br>
ftp localhost<br>
<br>
# Or use graphical clients like:<br>
# - FileZilla<br>
# - WinSCP<br>
# - Cyberduck
            </div>
        </div>

        <div class="warning">
            <h3>🔍 Recent Activity Log</h3>
            <div class="code-block">
[2024-08-02 10:15] User 'coach_martinez' uploaded training_plan_2024.pdf<br>
[2024-08-02 11:30] User 'admin' accessed financial_reports/<br>
[2024-08-02 14:22] Failed login attempt from IP 192.168.1.105<br>
[2024-08-02 15:45] User 'analyst_sarah' downloaded player_stats.xlsx<br>
[2024-08-02 16:10] Anonymous access attempt blocked
            </div>
        </div>

        <div style="text-align: center; margin-top: 2rem;">
            <a href="index.php" class="btn">🏠 Back to Home</a>
            <a href="ssh-terminal.php" class="btn">💻 SSH Terminal</a>
            <a href="database.php" class="btn">🗄️ Database</a>
        </div>

        <div class="warning" style="margin-top: 2rem;">
            <h3>🎯 Penetration Testing Hint</h3>
            <p>The FTP service might have weak credentials or misconfigurations. Try common username/password combinations or look for anonymous access.</p>
            <p><strong>Enumeration tip:</strong> Check if the FTP service leaks system information during connection.</p>
        </div>
    </div>
</body>
</html>
