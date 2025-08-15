# 🏆 Professional CTF Platform - Elite Football Security Challenges

A comprehensive Capture The Flag (CTF) platform featuring 6 advanced cybersecurity challenges themed around elite football clubs. Built for educational purposes and penetration testing training.

## 🎯 Challenge Overview

| Challenge | Club Theme | Vulnerability Type | Difficulty | Port |
|-----------|------------|-------------------|------------|------|
| **FC Barcelona Media** | File Upload RCE | Web Application Security | Intermediate | 8080 |
| **Real Madrid Analytics** | SQL Injection | Authentication Bypass | Beginner | 8081 |
| **Arsenal Network Ops** | Command Injection | OS Command Execution | Intermediate | 8082 |
| **Manchester United IT** | Privilege Escalation | SUID Binary Exploitation | Advanced | 8083 |
| **Chelsea Development** | Buffer Overflow | Binary Exploitation | Expert | 8084 |
| **Messi Academy Corporate** | Multi-Service Network | Advanced Network Penetration | Expert | 8085 |

## 🚀 Quick Start

### Prerequisites
- Docker Desktop installed and running
- Python 3.8+ with docker library
- 8GB+ RAM recommended
- 50GB+ disk space

### Installation
```bash
# Clone the repository
git clone https://github.com/yourusername/beginner-ctf-platform.git
cd beginner-ctf-platform

# Create virtual environment (recommended)
python3 -m venv ctf-env
source ctf-env/bin/activate  # On Windows: ctf-env\Scripts\activate

# Install dependencies
pip install docker

# Deploy all challenges
cd deployment
python3 deploy.py all
