<!DOCTYPE html>
<html>
<head>
    <title>Ping Results - Football Network Tool</title>
    <style>
        body { font-family: Arial; background: linear-gradient(45deg, #1e3c72, #2a5298); color: white; padding: 50px; }
        .tool { background: rgba(255,255,255,0.1); padding: 40px; border-radius: 15px; text-align: center; max-width: 800px; margin: 0 auto; }
        .result { background: #333; color: #00ff00; padding: 20px; border-radius: 10px; margin: 20px 0; text-align: left; font-family: monospace; white-space: pre-wrap; }
    </style>
</head>
<body>
    <div class="tool">
        <h1>🏓 PING RESULTS 🏓</h1>
        
        <?php
        if (isset($_POST['target'])) {
            $target = $_POST['target'];
            echo "<p><strong>Pinging:</strong> $target</p>";
            
            // VULNERABILITY: Direct command injection!
            $command = "ping -c 4 " . $target;
            echo "<div class='result'>";
            echo "<strong>Command:</strong> $command\n\n";
            
            // Execute the command (vulnerable!)
            $output = shell_exec($command . " 2>&1");
            echo htmlspecialchars($output);
            echo "</div>";
        }
        ?>
        
        <a href="index.php" style="color: #ffd700;">← Back to Network Tool</a>
    </div>
</body>
</html>