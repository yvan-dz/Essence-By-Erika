# Offizielles PHP-Image mit Apache
FROM php:8.1-apache

# Kopiere alle Dateien ins Webserver-Verzeichnis
COPY . /var/www/html/

# Aktiviere benötigte PHP-Module
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Exponiere Port 80 für den Webserver
EXPOSE 80

# Starte den Apache-Server
CMD ["apache2-foreground"]
