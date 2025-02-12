# Verwende ein offizielles PHP-Image mit Apache
FROM php:8.1-apache

# Aktiviere benötigte PHP-Module (falls du eine Datenbank verwendest)
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Setze den Arbeitsordner auf das Apache-Root-Verzeichnis
WORKDIR /var/www/html

# Kopiere alle Projektdateien in den Container
COPY . /var/www/html/

# Exponiere Port 80 für den Webserver
EXPOSE 80

# Starte Apache im Vordergrund
CMD ["apache2-foreground"]
