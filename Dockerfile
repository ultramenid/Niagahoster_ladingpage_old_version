FROM php:7.4-fpm-alpine

RUN docker-php-ext-install pdo pdo_mysql
RUN curl -sS https://getcomposer.org/installer | php -- \
        --install-dir=/usr/local/bin --filename=composer
RUN apt-get install -y gnupg2
RUN apt-get install nodejs -y

WORKDIR /app
COPY . .
RUN composer install
RUN npm install
RUN ./start.sh

CMD php artisan serve --host=0.0.0.0
