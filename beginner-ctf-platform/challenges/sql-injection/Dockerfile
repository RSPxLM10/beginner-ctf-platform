FROM php:7.4-apache
COPY webapp/ /var/www/html/
COPY flag.txt /var/www/html/flag.txt
RUN chmod 644 /var/www/html/flag.txt
RUN chown -R www-data:www-data /var/www/html
RUN chmod 755 /var/www/html
EXPOSE 80