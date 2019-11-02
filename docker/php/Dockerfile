FROM php:7.2-fpm
RUN apt-get update -qq && apt-get install -y libpq-dev && docker-php-ext-install pdo_mysql pdo_pgsql
RUN cd /usr/bin && curl -s http://getcomposer.org/installer | php && ln -s /usr/bin/composer.phar /usr/bin/composer
RUN apt-get update -qq && apt-get install -y build-essential libxslt-dev libxml2-dev cmake
RUN apt-get install -y nodejs npm
RUN apt-get update -qq && apt-get install -y git
RUN apt-get update -qq && apt-get install -y zip
RUN apt-get update -qq && apt-get install -y unzip
RUN apt-get update -qq && apt-get install -y vim
WORKDIR /var/www/html