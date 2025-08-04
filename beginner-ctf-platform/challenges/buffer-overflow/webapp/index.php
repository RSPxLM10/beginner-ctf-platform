<!DOCTYPE html>
<html>
<head>
    <title>🏆 Football Binary Challenge 🏆</title>
    <style>
        body { font-family: Arial; background: linear-gradient(45deg, #1e3c72, #2a5298); color: white; padding: 50px; text-align: center; }
        .terminal { background: #000; color: #00ff00; padding: 30px; border-radius: 10px; font-family: monospace; text-align: left; margin: 20px 0; }
        .challenge { background: rgba(255,215,0,0.1); padding: 20px; border-radius: 10px; margin: 20px 0; border: 2px solid #ffd700; }
        .hint { background: rgba(255,255,255,0.1); padding: 20px; border-radius: 10px; margin: 20px 0; }
    </style>
</head>
<body>
    <h1>⚽ FOOTBALL BINARY EXPLOITATION CHALLENGE ⚽</h1>
    <p>Messi's Secret Training Program - Binary Security Analysis</p>
    
    <div class="terminal">
        <p><strong>🖥️ Binary Analysis Lab:</strong></p>
        <p>Target Binary: /home/player/vulnerable_program</p>
        <p>Architecture: x86_64 Linux</p>
        <p>Security: NX disabled, ASLR disabled, Stack Canaries disabled</p>
        <p>Objective: Buffer overflow to execute shellcode</p>
    </div>
    
    <div class="challenge">
        <h3>🔑 SSH ACCESS</h3>
        <p><strong>Server:</strong> localhost</p>
        <p><strong>Port:</strong> 2223</p>
        <p><strong>Username:</strong> player</p>
        <p><strong>Password:</strong> football123</p>
        <p><strong>Command:</strong> <code>ssh player@localhost -p 2223</code></p>
    </div>
    
    <div class="hint">
        <h3>🎯 Mission: Buffer Overflow Exploitation</h3>
        <p><strong>Goal:</strong> Exploit buffer overflow to get shell and find flag in <code>/root/flag.txt</code></p>
        <p><strong>Binary Location:</strong> <code>/home/player/vulnerable_program</code></p>
        <p><strong>Hints:</strong></p>
        <ul style="text-align: left; display: inline-block;">
            <li>Analyze the binary: <code>file vulnerable_program</code></li>
            <li>Test with long input to crash it</li>
            <li>Find the offset to overwrite return address</li>
            <li>The binary has SUID root permissions</li>
        </ul>
    </div>
    
    <p style="color: #ffd700; font-size: 1.2em;">🚩 <strong>Flag Location:</strong> /root/flag.txt</p>
</body>
</html>