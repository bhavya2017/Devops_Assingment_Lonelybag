FROM php:8.2-apache

# Install mysqli extension
RUN docker-php-ext-install mysqli

# (Optional) Enable mod_rewrite if needed
RUN a2enmod rewrite

# Copy all app files into container
COPY . /var/www/html/

WORKDIR /var/www/html/

EXPOSE 80
