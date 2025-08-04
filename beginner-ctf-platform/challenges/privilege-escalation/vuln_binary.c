#include <stdio.h>
#include <stdlib.h>
#include <unistd.h>
#include <string.h>

int main(int argc, char *argv[]) {
    char command[300];
    
    // ESCALATE TO ROOT FIRST!
    setuid(0);  // This makes us root if binary has SUID bit
    setgid(0);
    
    printf("⚽ Football Score Checker ⚽\n");
    printf("=============================\n");
    
    if (argc != 2) {
        printf("Usage: %s <team_name>\n", argv[0]);
        return 1;
    }
    
    // VULNERABILITY: Command injection
    strcpy(command, "echo 'Checking score for ");
    strcat(command, argv[1]);
    strcat(command, "...' && echo 'Score: 3-1'");
    
    printf("Executing: %s\n", command);
    system(command);
    
    return 0;
}