<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SSH Terminal Access - Messi Football Academy</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #27ae60, #2ecc71);
            color: white;
            padding: 2rem;
            min-height: 100vh;
        }
        .container {
            max-width: 900px;
            margin: 0 auto;
            background: rgba(0,0,0,0.8);
            padding: 2rem;
            border-radius: 15px;
            backdrop-filter: blur(10px);
        }
        .terminal {
            background: #000;
            color: #00ff00;
            padding: 1.5rem;
            border-radius: 8px;
            font-family: 'Courier New', monospace;
            margin: 1rem 0;
            font-size: 0.9em;
            line-height: 1.4;
        }
        .service-info {
            background: rgba(46, 204, 113, 0.2);
            padding: 1.5rem;
            border-radius: 10px;
            margin: 1rem 0;
            border-left: 4px solid #2ecc71;
        }
        .warning {
            background: rgba(231, 76, 60, 0.2);
            padding: 1rem;
            border-radius: 10px;
            margin: 1rem 0;
            border-left: 4px solid #e74c3c;
        }
        .btn {
            display: inline-block;
            background: #27ae60;
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
        <div style="text-align: center; margin-bottom: 2rem;">
            <h1>💻 SSH Terminal Access</h1>
            <p>Academy Server Administration Portal</p>
        </div>

        <div class="service-info">
            <h3>🖥️ Server Infrastructure</h3>
            <ul>
                <li><strong>Main Server:</strong> Ubuntu 20.04 LTS</li>
                <li><strong>Database Server:</strong> MySQL 8.0</li>
                <li><strong>File Server:</strong> ProFTPD</li>
                <li><strong>Web Server:</strong> Apache 2.4</li>
                <li><strong>Backup System:</strong> Daily automated backups</li>
            </ul>
        </div>

        <div class="terminal">
academy-admin@messi-server:~$ last
coach_martinez  pts/1    192.168.1.50     Fri Aug  2 09:15 - 11:30  (02:15)
admin           pts/0    192.168.1.10     Fri Aug  2 08:00   still logged in
analyst_sarah   pts/2    192.168.1.75     Thu Aug  1 14:22 - 18:45  (04:23)
backup_service  pts/3    localhost        Thu Aug  1 02:00 - 02:15  (00:15)

academy-admin@messi-server:~$ ps aux | grep -E "(mysql|ftp|apache)"
mysql       1205  0.1  8.5 1234567 87432 ?     Ssl  Aug01   2:15 /usr/sbin/mysqld
proftpd     1456  0.0  0.5  123456  5432 ?     S    Aug01   0:05 proftpd: (accepting connections)
www-data    2134  0.0  2.1  234567 21456 ?     S    Aug01   0:12 /usr/sbin/apache2 -k start
        </div>

        <div class="service-info">
            <h3>🔑 SSH Connection Details</h3>
            <div class="terminal">
Host: localhost<br>
Port: 22<br>
Protocol: SSH-2<br>
Encryption: AES-256<br>
Authentication: Password & Key-based<br>
<br>
# Connect using:<br>
ssh username@localhost<br>
ssh -p 22 username@localhost
            </div>
        </div>

        <div class="warning">
            <h3>👥 Active User Accounts</h3>
            <div class="terminal">
academy-admin   - Full system administrator<br>
coach_martinez  - Training staff access<br>
analyst_sarah   - Data analysis & reports<br>
backup_service  - Automated backup system<br>
guest_trainer   - Limited access for visiting coaches<br>
maintenance     - System maintenance account
            </div>
            <p><strong>Security Note:</strong> All accounts require strong authentication. Some legacy accounts may still exist from previous system migrations.</p>
        </div>

        <div class="service-info">
            <h3>📊 System Status</h3>
            <div class="terminal">
Uptime: 45 days, 12 hours, 34 minutes<br>
Load Average: 0.85, 0.92, 1.01<br>
Memory Usage: 6.2GB / 16GB (38%)<br>
Disk Usage: 485GB / 1TB (48%)<br>
Network: 1Gbps - Active<br>
Security: Firewall enabled, Intrusion detection active
            </div>
        </div>

        <div style="text-align: center; margin-top: 2rem;">
            <a href="index.php" class="btn">🏠 Back to Home</a>
            <a href="ftp-access.php" class="btn">📁 FTP Access</a>
            <a href="database.php" class="btn">🗄️ Database</a>
        </div>

        <div class="warning" style="margin-top: 2rem;">
            <h3>🎯 Penetration Testing Objectives</h3>
            <p><strong>Goal:</strong> Gain SSH access to the academy server</p>
            <ul>
                <li>Enumerate user accounts and services</li>
                <li>Attempt credential attacks or exploit misconfigurations</li>
                <li>Look for privilege escalation opportunities</li>
                <li>Access sensitive academy data and find hidden flags</li>
            </ul>
        </div>
    </div>
</body>
</html>
