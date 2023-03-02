FROM httpd:alpine

RUN apk update && apk upgrade

RUN apk add vim iproute2 bash

RUN echo 'ServerName site02' >> /usr/local/apache2/conf/httpd.conf

RUN rm -rf /usr/local/apache2/htdocs/*
COPY ./html/index.php /usr/local/apache2/htdocs/index.php
