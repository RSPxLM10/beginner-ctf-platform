#include <stdio.h>
#include <stdlib.h>
#include <string.h>
#include <unistd.h>

void win_function() {
    FILE *flag_file, *output_file;
    char buffer[256];
    
    printf("🎉 CONGRATULATIONS! You exploited the buffer overflow! 🎉\n");
    
    // Set privileges
    setuid(0);
    setgid(0);
    
    // Try to read flag using C file operations
    flag_file = fopen("/root/flag.txt", "r");
    if (flag_file) {
        output_file = fopen("/tmp/flag_captured.txt", "w");
        if (output_file) {
            fprintf(output_file, "Buffer overflow successful!\n");
            fprintf(output_file, "User ID: %d\n", getuid());
            fprintf(output_file, "Flag: ");
            
            while (fgets(buffer, sizeof(buffer), flag_file)) {
                fputs(buffer, output_file);
            }
            
            fclose(flag_file);
            fclose(output_file);
            printf("✅ Flag captured in /tmp/flag_captured.txt\n");
        }
    } else {
        printf("❌ Could not read flag file\n");
    }
}

void vulnerable_function() {
    char buffer[64];
    printf("⚽ Enter your football team name: ");
    fflush(stdout);
    
    gets(buffer);
    
    printf("Team entered: %s\n", buffer);
    printf("Better luck next time!\n");
}

int main() {
    printf("=== FOOTBALL TEAM REGISTRATION ===\n");
    printf("Win function address: %p\n", win_function);
    vulnerable_function();
    return 0;
}