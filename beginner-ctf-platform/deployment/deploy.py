#!/usr/bin/env python3
import docker
import random
import string
import json
import subprocess
import sys
import os

class CTFDeployer:
    def __init__(self):
        try:
            self.client = docker.from_env()
        except:
            print("⚠️  Docker not running. Please start Docker Desktop.")
            sys.exit(1)
            
        self.challenges = {
            'file-upload': {
                'name': 'File Upload RCE',
                'path': '../challenges/boot-to-root',
                'port': 8080,
                'flag_format': 'CTF{upload_rce_RANDOM}',
                'image': 'magazine-ctf'
            },
            'sql-injection': {
                'name': 'SQL Injection Login Bypass', 
                'path': '../challenges/sql-injection',
                'port': 8081,
                'flag_format': 'CTF{sql_injection_RANDOM}',
                'image': 'sql-injection-ctf'
            },
            'command-injection': {
                'name': 'Command Injection Network Tool',
                'path': '../challenges/command-injection', 
                'port': 8082,
                'flag_format': 'CTF{command_injection_RANDOM}',
                'image': 'command-injection-ctf'
            },
            'privilege-escalation': {
                'name': 'Linux Privilege Escalation',
                'path': '../challenges/privilege-escalation',
                'port': 8083,
                'flag_format': 'CTF{privilege_escalation_RANDOM}',
                'image': 'privilege-escalation-ctf'
            },
            'buffer-overflow': {
                'name': 'Buffer Overflow Binary Exploitation',
                'path': '../challenges/buffer-overflow',
                'port': 8084,
                'flag_format': 'CTF{buffer_overflow_RANDOM}',
                'image': 'buffer-overflow-ctf'
            },
            'advanced-network': {
                'name': 'Advanced Multi-Service Corporate Network',
                'path': '../challenges/advanced-network',
                'port': 8085,
                'flag_format': 'CTF{advanced_network_RANDOM}',
                'image': 'advanced-network-ctf'
            }
        }
    
    def generate_flag(self, format_str):
        """Generate random flag"""
        random_str = ''.join(random.choices(string.ascii_lowercase + string.digits, k=8))
        return format_str.replace('RANDOM', random_str)
    
    def update_flag_file(self, challenge_path, flag):
        """Update flag.txt in challenge directory"""
        flag_path = os.path.join(challenge_path, 'flag.txt')
        with open(flag_path, 'w') as f:
            f.write(flag)
        print(f"📝 Updated flag file: {flag_path}")
    
    def list_challenges(self):
        """List available challenges"""
        print("\n🎯 Available CTF Challenges:")
        print("=" * 60)
        for key, challenge in self.challenges.items():
            print(f"🔥 {key}: {challenge['name']}")
            print(f"   Port: {challenge['port']}")
            print("")
    
    def stop_running_containers(self):
        """Stop any running CTF containers"""
        for challenge in self.challenges.values():
            try:
                container = self.client.containers.get(challenge['image'])
                container.stop()
                container.remove()
                print(f"🛑 Stopped {challenge['image']}")
            except:
                pass
    
    def deploy_challenge(self, challenge_key, custom_flag=None):
        """Deploy a specific challenge with custom flag"""
        if challenge_key not in self.challenges:
            print(f"❌ Challenge '{challenge_key}' not found!")
            return False
        
        challenge = self.challenges[challenge_key]
        
        # Generate or use custom flag
        if custom_flag:
            flag = custom_flag
        else:
            flag = self.generate_flag(challenge['flag_format'])
        
        print(f"\n🚀 Deploying: {challenge['name']}")
        print(f"🚩 Flag: {flag}")
        print(f"🌐 URL: http://localhost:{challenge['port']}")
        
        # Update flag file
        self.update_flag_file(challenge['path'], flag)
        
        # Build container
        print("🔨 Building container...")
        try:
            subprocess.run(['docker', 'build', '-t', challenge['image'], challenge['path']], 
                         check=True, capture_output=True)
            print("✅ Container built successfully!")
        except subprocess.CalledProcessError as e:
            print(f"❌ Build failed: {e}")
            return False
        
        # Run container
        print("🏃 Starting container...")
        try:
            subprocess.run(['docker', 'run', '-d', '-p', f"{challenge['port']}:80", 
                          '--name', challenge['image'], challenge['image']], 
                         check=True, capture_output=True)
            print(f"✅ Challenge running at http://localhost:{challenge['port']}")
            return True
        except subprocess.CalledProcessError as e:
            print(f"❌ Failed to start container: {e}")
            return False
    
    def deploy_all(self):
        """Deploy all challenges with random flags"""
        print("\n🎯 Deploying ALL challenges!")
        self.stop_running_containers()
        
        for key in self.challenges.keys():
            self.deploy_challenge(key)
            print("-" * 60)
        
        print("\n🎉 All challenges deployed!")
        print("\n🌐 Access your challenges:")
        for key, challenge in self.challenges.items():
            print(f"   • {challenge['name']}: http://localhost:{challenge['port']}")

if __name__ == "__main__":
    deployer = CTFDeployer()
    
    if len(sys.argv) < 2:
        deployer.list_challenges()
        print("\nCommands:")
        print("  python3 deploy.py <challenge-key>  - Deploy single challenge")
        print("  python3 deploy.py all              - Deploy all challenges")
        print("\nExamples:")
        print("  python3 deploy.py file-upload")
        print("  python3 deploy.py advanced-network")
        print("  python3 deploy.py all")
    elif sys.argv[1] == "all":
        deployer.deploy_all()
    else:
        challenge_key = sys.argv[1]
        deployer.deploy_challenge(challenge_key)
