<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analytics Dashboard - Messi Football Academy</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #f39c12, #e67e22);
            color: white;
            padding: 2rem;
            min-height: 100vh;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            background: rgba(0,0,0,0.8);
            padding: 2rem;
            border-radius: 15px;
            backdrop-filter: blur(10px);
        }
        .dashboard-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 1.5rem;
            margin: 2rem 0;
        }
        .metric-card {
            background: rgba(243, 156, 18, 0.2);
            padding: 1.5rem;
            border-radius: 10px;
            text-align: center;
            border: 1px solid rgba(243, 156, 18, 0.3);
        }
        .metric-value {
            font-size: 2.5em;
            font-weight: bold;
            color: #f39c12;
            margin: 0.5rem 0;
        }
        .service-info {
            background: rgba(230, 126, 34, 0.2);
            padding: 1.5rem;
            border-radius: 10px;
            margin: 1rem 0;
            border-left: 4px solid #e67e22;
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
        }
        .btn {
            display: inline-block;
            background: #e67e22;
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
            <h1>📊 Advanced Analytics Dashboard</h1>
            <p>Real-time Performance Analytics & AI-Powered Insights</p>
        </div>

        <div class="dashboard-grid">
            <div class="metric-card">
                <h3>Active Players</h3>
                <div class="metric-value">1,247</div>
                <p>Currently enrolled students</p>
            </div>
            <div class="metric-card">
                <h3>Training Sessions</h3>
                <div class="metric-value">8,945</div>
                <p>Completed this year</p>
            </div>
            <div class="metric-card">
                <h3>Performance Score</h3>
                <div class="metric-value">94.2%</div>
                <p>Average improvement rate</p>
            </div>
            <div class="metric-card">
                <h3>Pro Contracts</h3>
                <div class="metric-value">127</div>
                <p>Alumni signed this year</p>
            </div>
        </div>

        <div class="service-info">
            <h3>🤖 AI Analytics Engine</h3>
            <ul>
                <li><strong>Player Performance Prediction:</strong> Machine learning models analyzing 847 data points per player</li>
                <li><strong>Injury Prevention:</strong> Biomechanical analysis and risk assessment algorithms</li>
                <li><strong>Tactical Analysis:</strong> Game strategy optimization using computer vision</li>
                <li><strong>Recruitment Intelligence:</strong> Talent scouting automation and player evaluation</li>
            </ul>
        </div>

        <div class="warning">
            <h3>🔍 Data Processing Pipeline</h3>
            <div class="code-block">
Data Sources:<br>
├── Training Session Recordings (4K Video Analysis)<br>
├── Wearable Device Metrics (Heart Rate, GPS, Acceleration)<br>
├── Match Performance Statistics (Goals, Assists, Pass Accuracy)<br>
├── Medical Assessment Data (Fitness Tests, Injury Reports)<br>
└── Psychological Evaluation Scores (Mental Resilience, Focus)<br>
<br>
Processing Infrastructure:<br>
├── Apache Kafka - Real-time data streaming<br>
├── TensorFlow - Machine learning model training<br>
├── Elasticsearch - Full-text search and analytics<br>
├── Redis - High-performance caching layer<br>
└── PostgreSQL - Advanced analytics database
            </div>
        </div>

        <div class="service-info">
            <h3>📈 Real-time Monitoring</h3>
            <div class="code-block">
System Status: <span style="color: #27ae60;">●</span> All services operational<br>
<br>
Analytics API Endpoint: https://api.messi-academy.com/v2/<br>
WebSocket Stream: wss://stream.messi-academy.com/live<br>
Data Refresh Rate: 500ms (real-time)<br>
<br>
Current Processing Load:<br>
├── Video Analysis: 23 concurrent streams<br>
├── Performance Calculations: 1,247 active sessions<br>
├── Predictive Models: 5,432 predictions/hour<br>
└── Database Queries: 45,892 operations/minute
            </div>
        </div>

        <div class="warning">
            <h3>🔐 API Security & Access</h3>
            <div class="code-block">
Authentication Methods:<br>
├── JWT Tokens (RS256 signed)<br>
├── OAuth 2.0 with PKCE<br>
├── API Key + HMAC signature<br>
└── mTLS for service-to-service communication<br>
<br>
Rate Limiting:<br>
├── Public API: 1,000 requests/hour<br>
├── Authenticated: 10,000 requests/hour<br>
├── Premium: 100,000 requests/hour<br>
└── Internal: Unlimited<br>
<br>
Recent API Activity:<br>
[2024-08-02 16:45] GET /api/v2/players/performance - 200 OK<br>
[2024-08-02 16:46] POST /api/v2/analysis/video - 202 Accepted<br>
[2024-08-02 16:47] GET /api/v2/predictions/injury-risk - 401 Unauthorized<br>
[2024-08-02 16:48] DELETE /api/v2/cache/flush - 403 Forbidden
            </div>
        </div>

        <div style="text-align: center; margin-top: 2rem;">
            <a href="index.php" class="btn">🏠 Back to Home</a>
            <a href="ftp-access.php" class="btn">📁 FTP Access</a>
            <a href="ssh-terminal.php" class="btn">💻 SSH Terminal</a>
            <a href="database.php" class="btn">🗄️ Database</a>
        </div>

        <div class="warning" style="margin-top: 2rem;">
            <h3>🎯 API Penetration Testing</h3>
            <p><strong>Testing Objectives:</strong></p>
            <ul>
                <li>Enumerate API endpoints and discover hidden functionality</li>
                <li>Test authentication bypass and privilege escalation</li>
                <li>Analyze API rate limiting and abuse potential</li>
                <li>Test for injection vulnerabilities in data processing</li>
                <li>Examine WebSocket connections for security flaws</li>
            </ul>
            <p><strong>Advanced Challenge:</strong> The analytics system processes sensitive player data - can you access private performance reports or prediction algorithms?</p>
        </div>
    </div>
</body>
</html>
