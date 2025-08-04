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
    sudo \
    vim \
    && rm -rf /var/lib/apt/lists/*

# Setup SSH
RUN mkdir /var/run/sshd
RUN echo 'root:rootpass123' | chpasswd
RUN sed -i 's/#PermitRootLogin prohibit-password/PermitRootLogin yes/' /etc/ssh/sshd_config
RUN sed -i 's/#PasswordAuthentication yes/PasswordAuthentication yes/' /etc/ssh/sshd_config

# Create user
RUN useradd -m -s /bin/bash footballer
RUN echo 'footballer:messi2024' | chpasswd

# Setup Apache to use PHP as default
RUN a2enmod php7.4
RUN echo "DirectoryIndex index.php index.html" >> /etc/apache2/apache2.conf

# Copy web files and remove default Apache page
COPY webapp/ /var/www/html/
RUN rm -f /var/www/html/index.html
RUN chown -R www-data:www-data /var/www/html
RUN chmod 644 /var/www/html/index.php

# Create vulnerable SUID binary with proper permissions
COPY vuln_binary.c /tmp/vuln_binary.c
RUN gcc /tmp/vuln_binary.c -o /usr/local/bin/check_score
RUN chown root:root /usr/local/bin/check_score
RUN chmod u+s /usr/local/bin/check_score
RUN ls -la /usr/local/bin/check_score

# Create flag
COPY flag.txt /root/flag.txt
RUN chmod 600 /root/flag.txt

# Create start script inside container
RUN echo '#!/bin/bash' > /start.sh && \
    echo 'service ssh start' >> /start.sh && \
    echo 'service apache2 start' >> /start.sh && \
    echo 'tail -f /dev/null' >> /start.sh && \
    chmod +x /start.sh

EXPOSE 80 22

CMD ["/start.sh"]