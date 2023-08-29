FROM php:7.2-apache
EXPOSE 80
COPY web /var/www/html
CMD ["php", "-S", "0.0.0.0:80", "-t", "/var/www/html"]
