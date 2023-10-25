# Use an official PHP runtime as a parent image
FROM php:7.4-apache

RUN apt-get update && apt-get install -y inotify-tools
#RUN docker-php-ext-install pdo pdo_mysql
# curl silent mode download
#RUN curl -s https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copy the PHP files
COPY ./app /var/www/html/

RUN chmod +x run.sh

EXPOSE 80

CMD ["/var/www/html/run.sh"]

# docker run -d -p 8080:80 -v C:/Users/Mareks/Projects/nginx+php-docker/app:/var/www/html my-php-webserver
