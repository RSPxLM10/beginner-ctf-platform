<!DOCTYPE html>
<html>
<head>
    <title>🏆 Football Admin Portal</title>
    <style>
        body { font-family: Arial; background: linear-gradient(45deg, #1e3c72, #2a5298); color: white; text-align: center; padding: 50px; }
        .login-form { background: rgba(255,255,255,0.1); padding: 40px; border-radius: 15px; display: inline-block; }
        input { padding: 10px; margin: 10px; border-radius: 5px; border: none; }
        button { background: #ffd700; color: #333; padding: 10px 20px; border: none; border-radius: 5px; font-weight: bold; }
    </style>
</head>
<body>
    <h1>⚽ FOOTBALL ADMIN LOGIN ⚽</h1>
    <div class="login-form">
        <form action="auth.php" method="POST">
            <p>Username: <input type="text" name="username" required></p>
            <p>Password: <input type="password" name="password" required></p>
            <button type="submit">🚀 LOGIN</button>
        </form>
        <p>Hint: Try some admin credentials! 😉</p>
    </div>
</body>
</html>