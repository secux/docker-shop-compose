##############################
# Apache
##############################

# Base image
##############################
FROM httpd:latest

# Maintainer
##############################
MAINTAINER decemvre decemvre@gmail.com

# Config
##############################
RUN chown -R www-data /var/www/html && \
chgrp -R www-data /var/www/html && \
chmod -R 0775 /var/www/html

# Ports
##############################
EXPOSE 80