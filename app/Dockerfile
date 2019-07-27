FROM php:7.3.0RC6-fpm-alpine3.8

# setting working directory to source code root
WORKDIR /var/www/

# install pdo, etc...
RUN apk update && apk add --no-cache \
  freetype-dev libjpeg-turbo-dev libpng-dev libmcrypt-dev \
  git vim unzip tzdata \
  libmcrypt-dev \
  libltdl \
  && docker-php-ext-install pdo_mysql mysqli mbstring gd iconv \
  && cp /usr/share/zoneinfo/Asia/Tokyo /etc/localtime \
  && apk del tzdata \
  && rm -rf /var/cache/apk/*

# install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
