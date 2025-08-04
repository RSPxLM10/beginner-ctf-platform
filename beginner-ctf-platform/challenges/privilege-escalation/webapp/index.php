<!DOCTYPE html>
<html>
<head>
    <title>🏆 Football Server Admin Portal 🏆</title>
    <style>
        body { font-family: Arial; background: linear-gradient(45deg, #1e3c72, #2a5298); color: white; padding: 50px; text-align: center; }
        .terminal { background: #000; color: #00ff00; padding: 30px; border-radius: 10px; font-family: monospace; text-align: left; margin: 20px 0; }
        .access { background: rgba(255,215,0,0.1); padding: 20px; border-radius: 10px; margin: 20px 0; border: 2px solid #ffd700; }
        .hint { background: rgba(255,255,255,0.1); padding: 20px; border-radius: 10px; margin: 20px 0; }
    </style>
</head>
<body>
    <h1>⚽ FOOTBALL SERVER ADMIN PORTAL ⚽</h1>
    <p>Internal server management for Messi Football Club</p>
    
    <div class="terminal">
        <p><strong>🖥️ Server Status:</strong></p>
        <p>Uptime: 45 days | Load: 1.2 | Users: 3 active</p>
        <p>Database: MySQL running | Web: Apache active</p>
        <p>Backups: Scheduled | Security: Monitoring</p>
    </div>
    
    <div class="access">
        <h3>🔑 SSH ACCESS GRANTED</h3>
        <p><strong>Server:</strong> localhost</p>
        <p><strong>Port:</strong> 2222</p>
        <p><strong>Username:</strong> footballer</p>
        <p><strong>Password:</strong> messi2024</p>
        <p><strong>Command:</strong> <code>ssh footballer@localhost -p 2222</code></p>
    </div>
    
    <div class="hint">
        <h3>🎯 Mission: Privilege Escalation</h3>
        <p>You have <strong>limited user access</strong> to the football server.</p>
        <p><strong>Goal:</strong> Escalate to root and find the flag in <code>/root/flag.txt</code></p>
        <p><strong>Hints:</strong></p>
        <ul style="text-align: left; display: inline-block;">
            <li>Check for SUID binaries: <code>find / -perm -4000 2>/dev/null</code></li>
            <li>Look for writable files and directories</li>
            <li>Check sudo permissions: <code>sudo -l</code></li>
        </ul>
    </div>
    
    <p style="color: #ffd700; font-size: 1.2em;">🚩 <strong>Flag Location:</strong> /root/flag.txt</p>
</body>
</html>