FROM php:8.2-fpm-alpine3.18
RUN apk update && apk add --update linux-headers

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer
COPY --from=mlocati/php-extension-installer /usr/bin/install-php-extensions /usr/bin/

RUN apk add --no-cache unzip curl git
RUN install-php-extensions zip pdo_mysql bcmath opcache xdebug

RUN cp $PHP_INI_DIR/php.ini-development $PHP_INI_DIR/php.ini
COPY ./99-xdebug.ini $PHP_INI_DIR/conf.d/99-xdebug.ini
COPY ./98-replace.ini $PHP_INI_DIR/conf.d/98-replace.ini

WORKDIR /app

RUN echo $PHP_INI_DIR
