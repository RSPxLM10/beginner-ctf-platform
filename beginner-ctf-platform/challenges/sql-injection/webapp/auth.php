<?php
$username = $_POST['username'];
$password = $_POST['password'];

// Vulnerable SQL query simulation
$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";

// Check for correct credentials OR SQL injection
if (($username == "admin" && $password == "secret123") || 
    (strpos($username, "' OR") !== false) ||
    (strpos($username, "'--") !== false) ||
    (strpos($username, "OR 1=1") !== false)) {
    
    echo "<!DOCTYPE html><html><head><title>Football Admin Dashboard</title>";
    echo "<style>
        body { font-family: Arial; background: linear-gradient(45deg, #1e3c72, #2a5298); color: white; padding: 50px; }
        .dashboard { background: rgba(255,255,255,0.1); padding: 40px; border-radius: 15px; text-align: center; }
        .flag { background: #ffd700; color: #333; padding: 20px; border-radius: 10px; margin: 20px 0; font-weight: bold; }
    </style></head>";
    echo "<body><div class='dashboard'>";
    echo "<h1>⚽ FOOTBALL ADMIN DASHBOARD ⚽</h1>";
    echo "<p>Welcome to the administrative panel!</p>";
    echo "<p><strong>Query executed:</strong> <code>$query</code></p>";
    echo "<div class='flag'>🚩 FLAG: CTF{sql_injection_bypass_2025} 🚩</div>";
    echo "<p>✅ Authentication bypassed via SQL injection!</p>";
    echo "<a href='login.php' style='color:#ffd700;'>← Back to Login</a>";
    echo "</div></body></html>";
} else {
    echo "<!DOCTYPE html><html><head><title>Access Denied</title>";
    echo "<style>body{font-family:Arial;background:linear-gradient(45deg,#1e3c72,#2a5298);color:white;text-align:center;padding:50px;}</style></head>";
    echo "<body><h1>❌ ACCESS DENIED</h1>";
    echo "<p>Invalid credentials!</p>";
    echo "<a href='login.php' style='color:#ffd700;'>← Try Again</a></body></html>";
}
?>