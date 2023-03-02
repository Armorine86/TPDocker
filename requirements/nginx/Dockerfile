FROM nginx:alpine

RUN apk update && apk upgrade
# RUN apk install git

RUN mkdir -p /usr/share/nginx/html/tp3-site01.com
RUN mkdir -p /usr/share/nginx/html/tp3-site02.com

EXPOSE 80 443

WORKDIR /etc/nginx/

COPY ./conf/nginx.conf nginx.conf
RUN mv conf.d/default.conf default.conf.bak
COPY conf/default.conf conf.d/default.conf
COPY ./conf/tp3-site01.conf tp3-site01.conf
COPY ./conf/tp3-site02.conf tp3-site02.conf
