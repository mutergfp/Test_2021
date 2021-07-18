FROM php:7.4-fpm-alpine

RUN apk --no-cache update && apk --no-cache add bash git

# Install composer
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" && php composer-setup.php && php -r "unlink('composer-setup.php');" && mv composer.phar /usr/local/bin/composer

# Symfony CLI
RUN wget https://get.symfony.com/cli/installer -O installer && bash installer && rm -f installer && mv /root/.symfony/bin/symfony /usr/local/bin/symfony

WORKDIR /var/www/html