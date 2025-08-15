<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Management - Messi Football Academy</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #8e44ad, #9b59b6);
            color: white;
            padding: 2rem;
            min-height: 100vh;
        }
        .container {
            max-width: 1000px;
            margin: 0 auto;
            background: rgba(255,255,255,0.1);
            padding: 2rem;
            border-radius: 15px;
            backdrop-filter: blur(10px);
        }
        .service-info {
            background: rgba(155, 89, 182, 0.2);
            padding: 1.5rem;
            border-radius: 10px;
            margin: 1rem 0;
            border-left: 4px solid #9b59b6;
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
            font-size: 0.9em;
        }
        .table-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 1rem;
            margin: 1rem 0;
        }
        .table-card {
            background: rgba(52, 73, 94, 0.5);
            padding: 1rem;
            border-radius: 8px;
            border: 1px solid #34495e;
        }
        .btn {
            display: inline-block;
            background: #8e44ad;
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
            <h1>🗄️ Database Management System</h1>
            <p>Academy Player & Performance Database</p>
        </div>

        <div class="service-info">
            <h3>📊 Database Overview</h3>
            <ul>
                <li><strong>Engine:</strong> MySQL 8.0.35</li>
                <li><strong>Total Records:</strong> 145,892 entries</li>
                <li><strong>Active Players:</strong> 1,247 current students</li>
                <li><strong>Alumni Database:</strong> 3,459 graduated players</li>
                <li><strong>Performance Metrics:</strong> 2.8 million data points</li>
            </ul>
        </div>

        <div class="service-info">
            <h3>🗂️ Database Structure</h3>
            <div class="table-grid">
                <div class="table-card">
                    <h4>players</h4>
                    <p>Player profiles, personal info, contact details, emergency contacts</p>
                    <small>1,247 records</small>
                </div>
                <div class="table-card">
                    <h4>performance_stats</h4>
                    <p>Match statistics, training metrics, skill assessments</p>
                    <small>2,847,392 records</small>
                </div>
                <div class="table-card">
                    <h4>staff_members</h4>
                    <p>Coaches, analysts, admin staff, credentials</p>
                    <small>87 records</small>
                </div>
                <div class="table-card">
                    <h4>financial_records</h4>
                    <p>Tuition, scholarships, academy expenses</p>
                    <small>23,456 records</small>
                </div>
                <div class="table-card">
                    <h4>medical_records</h4>
                    <p>Health assessments, injury reports, fitness data</p>
                    <small>12,847 records</small>
                </div>
                <div class="table-card">
                    <h4>user_accounts</h4>
                    <p>System login credentials, access levels</p>
                    <small>156 records</small>
                </div>
            </div>
        </div>

        <div class="warning">
            <h3>🔐 Database Connection</h3>
            <div class="code-block">
Host: localhost<br>
Port: 3306<br>
Database: messi_academy<br>
Authentication: Required<br>
SSL: Enabled<br>
<br>
# MySQL Client Connection:<br>
mysql -h localhost -u username -p messi_academy<br>
<br>
# phpMyAdmin Interface:<br>
http://localhost/phpmyadmin/
            </div>
        </div>

        <div class="service-info">
            <h3>👥 Database Users</h3>
            <div class="code-block">
root@localhost          - Full administrative access<br>
academy_admin@%         - Academy management operations<br>
coach_system@%          - Training data read/write<br>
analyst_readonly@%      - Performance analytics (read-only)<br>
backup_service@%        - Automated backup operations<br>
web_application@%       - Web portal database access
            </div>
        </div>

        <div class="warning">
            <h3>⚠️ Recent Security Events</h3>
            <div class="code-block">
[2024-08-02 09:15] Successful login: academy_admin from 192.168.1.10<br>
[2024-08-02 10:30] Failed login attempt: guest from 192.168.1.105<br>
[2024-08-02 11:45] Database backup completed successfully<br>
[2024-08-02 14:22] Multiple failed login attempts detected<br>
[2024-08-02 15:10] Password policy violation warning<br>
[2024-08-02 16:05] SQL injection attempt blocked by WAF
            </div>
        </div>

        <div class="service-info">
            <h3>🎯 Sample Data Structure</h3>
            <div class="code-block">
SELECT * FROM players LIMIT 3;<br>
+----+---------------+----------+-------------+---------------+<br>
| id | name          | position | skill_level | academy_since |<br>
+----+---------------+----------+-------------+---------------+<br>
|  1 | Carlos Silva  | Forward  | Advanced    | 2022-09-15    |<br>
|  2 | Maria Torres  | Midfielder| Expert     | 2021-01-10    |<br>
|  3 | Ahmed Hassan  | Defender | Intermediate| 2023-03-22    |<br>
+----+---------------+----------+-------------+---------------+<br>
<br>
SELECT COUNT(*) FROM performance_stats WHERE date >= '2024-01-01';<br>
+----------+<br>
| count(*) |<br>
+----------+<br>
|   847392 |<br>
+----------+
            </div>
        </div>

        <div style="text-align: center; margin-top: 2rem;">
            <a href="index.php" class="btn">🏠 Back to Home</a>
            <a href="ftp-access.php" class="btn">📁 FTP Access</a>
            <a href="ssh-terminal.php" class="btn">💻 SSH Terminal</a>
        </div>

        <div class="warning" style="margin-top: 2rem;">
            <h3>🎯 Database Penetration Testing</h3>
            <p><strong>Objectives:</strong></p>
            <ul>
                <li>Enumerate database users and permissions</li>
                <li>Test for SQL injection vulnerabilities</li>
                <li>Attempt credential attacks on database accounts</li>
                <li>Access sensitive player and financial data</li>
                <li>Look for privilege escalation through database functions</li>
            </ul>
            <p><strong>Hint:</strong> Some legacy accounts might have weak passwords or excessive privileges.</p>
        </div>
    </div>
</body>
</html>
