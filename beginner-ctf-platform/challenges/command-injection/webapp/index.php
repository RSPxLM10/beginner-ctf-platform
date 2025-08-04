<!DOCTYPE html>
<html>
<head>
    <title>⚽ Football Network Diagnostics ⚽</title>
    <style>
        body { font-family: Arial; background: linear-gradient(45deg, #1e3c72, #2a5298); color: white; padding: 50px; }
        .tool { background: rgba(255,255,255,0.1); padding: 40px; border-radius: 15px; text-align: center; max-width: 600px; margin: 0 auto; }
        input[type="text"] { padding: 15px; width: 300px; border: none; border-radius: 5px; margin: 10px; }
        button { background: #ffd700; color: #333; padding: 15px 30px; border: none; border-radius: 5px; font-weight: bold; cursor: pointer; }
        .result { background: #333; color: #00ff00; padding: 20px; border-radius: 10px; margin: 20px 0; text-align: left; font-family: monospace; }
    </style>
</head>
<body>
    <div class="tool">
        <h1>🌐 FOOTBALL NETWORK DIAGNOSTICS 🌐</h1>
        <p>Test connectivity to football servers worldwide!</p>
        
        <form action="ping.php" method="POST">
            <p><strong>Enter IP address or hostname to ping:</strong></p>
            <input type="text" name="target" placeholder="8.8.8.8 or google.com" required>
            <br><br>
            <button type="submit">🚀 PING NOW!</button>
        </form>
        
        <p style="font-size: 0.9em; color: #ccc;">
            💡 Try pinging: google.com, 8.8.8.8, or your favorite football website!
        </p>
    </div>
</body>
</html>