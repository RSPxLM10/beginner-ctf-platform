FROM php:7.4-apache

# Copy web files (this includes the images folder inside webapp)
COPY webapp/ /var/www/html/

# Create flags
RUN echo "CTF{web_application_compromised}" > /var/www/html/web_flag.txt
RUN echo "CTF{advanced_network_challenge_complete}" > /var/www/html/final_flag.txt
RUN echo "CTF{corporate_network_enumerated}" > /var/www/html/hidden_flag.txt

# Set permissions
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80
