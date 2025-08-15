<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chelsea FC - Software Development Lab</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #034694 0%, #ffffff 50%, #034694 100%);
            color: #333;
            min-height: 100vh;
        }
        .header {
            background: rgba(3,70,148,0.95);
            color: white;
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
            color: white;
        }
        .hero h1 {
            font-size: 3em;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.7);
        }
        .lab-section {
            background: rgba(255,255,255,0.95);
            padding: 3rem;
            border-radius: 20px;
            margin: 2rem auto;
            max-width: 1000px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        }
        .binary-info {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin: 2rem 0;
        }
        .info-card {
            background: #f8f9fa;
            padding: 2rem;
            border-radius: 15px;
            border-left: 4px solid #034694;
        }
        .code-block {
            background: #2c3e50;
            color: #f8f9fa;
            padding: 1.5rem;
            border-radius: 10px;
            font-family: 'Courier New', monospace;
            margin: 1rem 0;
            border: 1px solid #34495e;
            overflow-x: auto;
        }
        .ssh-access {
            background: rgba(3,70,148,0.1);
            padding: 2rem;
            border-radius: 15px;
            margin: 2rem 0;
            border: 2px solid #034694;
        }
        .vulnerability-details {
            background: rgba(231,76,60,0.1);
            padding: 2rem;
            border-radius: 15px;
            margin: 2rem 0;
            border-left: 4px solid #e74c3c;
        }
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 1rem;
            margin: 1rem 0;
        }
        .stat-item {
            background: white;
            padding: 1rem;
            border-radius: 10px;
            text-align: center;
            border: 1px solid #e0e0e0;
        }
        .stat-number {
            font-size: 1.8em;
            font-weight: bold;
            color: #034694;
        }
    </style>
</head>
<body>
    <header class="header">
        <nav class="nav container">
            <div class="logo">🔵 Chelsea FC DevLab</div>
            <div>Software Development & Security Research</div>
        </nav>
    </header>

    <main class="main">
        <div class="container">
            <div class="hero">
                <h1>💻 Binary Exploitation Laboratory</h1>
                <p>Advanced software security research facility for Chelsea FC digital infrastructure</p>
            </div>

            <div class="lab-section">
                <h2 style="color: #034694; text-align: center; margin-bottom: 2rem;">🔬 Binary Security Analysis</h2>
                
                <div class="binary-info">
                    <div class="info-card">
                        <h3>🎯 Target Binary</h3>
                        <p><strong>Application:</strong> Player Registration System</p>
                        <p><strong>Architecture:</strong> x86_64 Linux ELF</p>
                        <p><strong>Compiler:</strong> GCC 9.4.0</p>
                        <p><strong>Language:</strong> C/C++</p>
                        <p><strong>File Size:</strong> 16.9 KB</p>
                    </div>
                    
                    <div class="info-card">
                        <h3>🛡️ Security Mitigations</h3>
                        <p><strong>ASLR:</strong> ❌ Disabled</p>
                        <p><strong>Stack Canaries:</strong> ❌ Disabled</p>
                        <p><strong>NX Bit:</strong> ❌ Disabled</p>
                        <p><strong>PIE:</strong> ❌ Disabled</p>
                        <p><strong>RELRO:</strong> ❌ Disabled</p>
                    </div>
                </div>

                <div class="ssh-access">
                    <h3>🔐 Laboratory Access</h3>
                    <p>Secure shell access to the Chelsea FC binary analysis environment</p>
                    
                    <div class="code-block">
<strong>SSH Connection Details:</strong><br>
Host: localhost<br>
Port: 2223<br>
Username: player<br>
Password: chelsea123<br>
<br>
<strong>Connect using:</strong><br>
ssh player@localhost -p 2223<br>
<br>
<strong>Target Binary Location:</strong><br>
/home/player/vulnerable_program
                    </div>
                </div>

                <div class="vulnerability-details">
                    <h3>⚠️ Vulnerability Analysis</h3>
                    <p><strong>Vulnerability Type:</strong> Stack-based Buffer Overflow</p>
                    <p><strong>CVSS Score:</strong> 9.8 (Critical)</p>
                    <p><strong>Affected Function:</strong> vulnerable_function()</p>
                    
                    <div class="stats-grid">
                        <div class="stat-item">
                            <div class="stat-number">64</div>
                            <div>Buffer Size</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">72+</div>
                            <div>Overflow Offset</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">8</div>
                            <div>Address Bytes</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">100%</div>
                            <div>Reliability</div>
                        </div>
                    </div>

                    <h4 style="margin-top: 1.5rem;">🎯 Exploitation Objectives:</h4>
                    <ul style="margin: 1rem 0; padding-left: 2rem;">
                        <li>Analyze the vulnerable binary using debugging tools</li>
                        <li>Calculate the exact buffer overflow offset</li>
                        <li>Overwrite the return address to redirect execution</li>
                        <li>Execute the win_function() to gain elevated privileges</li>
                        <li>Retrieve the flag from the system as root user</li>
                    </ul>

                    <div class="code-block">
<strong>Expected Exploitation Flow:</strong><br>
1. ./vulnerable_program<br>
2. Enter crafted payload: python3 -c "import sys; sys.stdout.buffer.write(b'A' * 72 + ADDRESS)"<br>
3. Achieve code execution and privilege escalation<br>
4. cat /root/flag.txt<br>
<br>
<strong>🚩 Flag Location:</strong> /root/flag.txt<br>
<strong>💡 Hint:</strong> The binary conveniently prints the win function address
                    </div>
                </div>

                <div style="background: rgba(3,70,148,0.1); padding: 2rem; border-radius: 15px;">
                    <h3>🏆 Challenge Difficulty: Advanced</h3>
                    <p>This binary exploitation challenge requires understanding of:</p>
                    <ul style="margin: 1rem 0; padding-left: 2rem;">
                        <li>Stack frame layout and calling conventions</li>
                        <li>Memory address calculation and endianness</li>
                        <li>Buffer overflow exploitation techniques</li>
                        <li>Return address overwriting methods</li>
                        <li>Privilege escalation through SUID binaries</li>
                    </ul>
                    <p><strong>Tools Available:</strong> GDB, objdump, strings, file, checksec</p>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
