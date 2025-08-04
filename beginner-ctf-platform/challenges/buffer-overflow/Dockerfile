FROM ubuntu:20.04

# Prevent timezone prompts
ENV DEBIAN_FRONTEND=noninteractive
ENV TZ=America/Denver

# Install required packages
RUN apt-get update && apt-get install -y \
    openssh-server \
    apache2 \
    php \
    libapache2-mod-php \
    gcc \
    gdb \
    vim \
    python3 \
    && rm -rf /var/lib/apt/lists/*

# Disable ASLR and stack protections for easier exploitation
RUN echo 'kernel.randomize_va_space = 0' >> /etc/sysctl.conf

# Setup SSH
RUN mkdir /var/run/sshd
RUN echo 'root:rootpass123' | chpasswd
RUN sed -i 's/#PermitRootLogin prohibit-password/PermitRootLogin yes/' /etc/ssh/sshd_config
RUN sed -i 's/#PasswordAuthentication yes/PasswordAuthentication yes/' /etc/ssh/sshd_config

# Create user
RUN useradd -m -s /bin/bash player
RUN echo 'player:football123' | chpasswd

# Setup Apache
RUN a2enmod php7.4
RUN echo "DirectoryIndex index.php index.html" >> /etc/apache2/apache2.conf
COPY webapp/ /var/www/html/
RUN rm -f /var/www/html/index.html
RUN chown -R www-data:www-data /var/www/html

# Create vulnerable binary
COPY vuln_program.c /tmp/vuln_program.c
RUN gcc -fno-stack-protector -z execstack -no-pie /tmp/vuln_program.c -o /home/player/vulnerable_program
RUN chown root:root /home/player/vulnerable_program
RUN chmod 4755 /home/player/vulnerable_program

# Create flag
RUN echo "CTF{buffer_overflow_shellcode_executed}" > /root/flag.txt
RUN chmod 600 /root/flag.txt

# Create start script
RUN echo '#!/bin/bash' > /start.sh && \
    echo 'echo 0 > /proc/sys/kernel/randomize_va_space' >> /start.sh && \
    echo 'service ssh start' >> /start.sh && \
    echo 'service apache2 start' >> /start.sh && \
    echo 'tail -f /dev/null' >> /start.sh && \
    chmod +x /start.sh

EXPOSE 80 22

CMD ["/start.sh"]