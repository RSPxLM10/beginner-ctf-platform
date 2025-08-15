<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manchester United - Server Infrastructure</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #da020e 0%, #000000 100%);
            color: white;
            min-height: 100vh;
        }
        .header {
            background: rgba(0,0,0,0.9);
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
        }
        .hero {
            text-align: center;
            margin-bottom: 3rem;
        }
        .hero h1 {
            font-size: 3em;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.7);
        }
        .server-dashboard {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin: 2rem 0;
        }
        .dashboard-card {
            background: rgba(255,255,255,0.1);
            padding: 2rem;
            border-radius: 15px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255,215,0,0.3);
        }
        .terminal {
            background: #000;
            color: #00ff00;
            padding: 1.5rem;
            border-radius: 10px;
            font-family: 'Courier New', monospace;
            margin: 1rem 0;
            border: 1px solid #333;
        }
        .access-section {
            background: rgba(218,2,14,0.2);
            padding: 2rem;
            border-radius: 15px;
            margin: 2rem 0;
            border-left: 4px solid #da020e;
        }
        .ssh-command {
            background: #333;
            color: #ffd700;
            padding: 1rem;
            border-radius: 8px;
            font-family: 'Courier New', monospace;
            margin: 1rem 0;
        }
        .status-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1rem;
            margin: 1rem 0;
        }
        .status-item {
            background: rgba(0,0,0,0.5);
            padding: 1rem;
            border-radius: 8px;
            text-align: center;
        }
        .status-value {
            font-size: 1.5em;
            font-weight: bold;
            color: #ffd700;
        }
    </style>
</head>
<body>
    <header class="header">
        <nav class="nav container">
            <div class="logo">🔴 Manchester United IT</div>
            <div>Server Infrastructure Management</div>
        </nav>
    </header>

    <main class="main">
        <div class="container">
            <div class="hero">
                <h1>🖥️ Corporate Server Infrastructure</h1>
                <p>Manchester United Enterprise Server Management Portal</p>
            </div>

            <div class="server-dashboard">
                <div class="dashboard-card">
                    <h3>🏢 Production Servers</h3>
                    <div class="status-grid">
                        <div class="status-item">
                            <div class="status-value">12</div>
                            <div>Web Servers</div>
                        </div>
                        <div class="status-item">
                            <div class="status-value">8</div>
                            <div>Database Servers</div>
                        </div>
                        <div class="status-item">
                            <div class="status-value">99.9%</div>
                            <div>Uptime</div>
                        </div>
                        <div class="status-item">
                            <div class="status-value">45TB</div>
                            <div>Storage</div>
                        </div>
                    </div>
                </div>

                <div class="dashboard-card">
                    <h3>📊 System Metrics</h3>
                    <div class="terminal">
manchester-server:~$ top<br>
Tasks: 298 total,   2 running, 296 sleeping<br>
%Cpu(s):  8.2 us,  2.1 sy,  0.0 ni, 89.7 id<br>
MiB Mem :  32768.0 total,  8234.2 free, 18945.8 used<br>
MiB Swap:   4096.0 total,  3892.1 free,   203.9 used<br>
<br>
  PID USER      PR  NI    VIRT    RES    SHR S  %CPU  %MEM<br>
 1234 www-data  20   0  456789  98765  12345 S   5.2   0.3<br>
 5678 mysql     20   0 1234567 234567  45678 S   3.1   0.7
                    </div>
                </div>

                <div class="dashboard-card">
                    <h3>🔐 Security Status</h3>
                    <ul style="list-style: none; padding: 0;">
                        <li style="margin: 0.5rem 0;">✅ Firewall: Active</li>
                        <li style="margin: 0.5rem 0;">✅ Intrusion Detection: Enabled</li>
                        <li style="margin: 0.5rem 0;">✅ SSL Certificates: Valid</li>
                        <li style="margin: 0.5rem 0;">⚠️ Last Scan: 24 hours ago</li>
                        <li style="margin: 0.5rem 0;">🔍 Vulnerabilities: 3 medium</li>
                    </ul>
                </div>
            </div>

            <div class="access-section">
                <h2>🔑 Secure Shell Access</h2>
                <p>Direct SSH access to Manchester United production server environment</p>
                
                <div class="ssh-command">
                    <strong>Server:</strong> manchester-prod-01.mufc.local<br>
                    <strong>Port:</strong> 2222<br>
                    <strong>Protocol:</strong> SSH-2 (OpenSSH 8.2)<br>
                    <strong>Authentication:</strong> Password + Key-based<br>
                    <br>
                    <strong>Command:</strong> ssh footballer@localhost -p 2222<br>
                    <strong>Password:</strong> mufc2024
                </div>

                <div style="background: rgba(0,0,0,0.5); padding: 1.5rem; border-radius: 10px; margin-top: 1rem;">
                    <h4>🎯 Penetration Testing Scenario</h4>
                    <p><strong>Objective:</strong> Gain privileged access to the Manchester United server infrastructure</p>
                    <ul style="margin: 1rem 0; padding-left: 2rem;">
                        <li>SSH into the server using provided credentials</li>
                        <li>Enumerate the system for privilege escalation opportunities</li>
                        <li>Look for SUID binaries, sudo misconfigurations, or kernel exploits</li>
                        <li>Escalate to root access and retrieve the administrative flag</li>
                    </ul>
                    <p><strong>🚩 Target:</strong> /root/flag.txt</p>
                    <p><strong>Hint:</strong> Check for custom SUID binaries in unusual locations</p>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
