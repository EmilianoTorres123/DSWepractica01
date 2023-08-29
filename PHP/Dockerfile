FROM php:8.2-cli
EXPOSE 80
COPY phpinfo.php /var/www/html
CMD ["php", "-S", "0.0.0.0:80", "-t", "/var/www/html"]
