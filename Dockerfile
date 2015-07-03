FROM ubuntu:latest

RUN apt-get update
RUN apt-get install -y git python-software-properties php5 php5-curl php5-mcrypt

RUN php5enmod mcrypt

COPY . /php-dev/

WORKDIR /php-dev/

RUN php -r "readfile('https://getcomposer.org/installer');" | php
RUN php composer.phar install

EXPOSE 8000

ENTRYPOINT ["php", "artisan", "serve", "--host",  "0.0.0.0"]
