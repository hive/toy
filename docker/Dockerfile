FROM php:7.3-stretch
RUN set -xe && apt-get update && apt-get install -y --no-install-recommends git openssh-client unzip vim libxslt-dev
RUN docker-php-ext-install opcache xsl

RUN pecl install xdebug-2.8.1 && docker-php-ext-enable xdebug

# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN useradd -ms /bin/bash dev -u 1000
USER dev
WORKDIR /home/dev

ENV PATH="'/home/dev/.local/bin:${PATH}"
