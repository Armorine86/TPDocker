FROM nginx:alpine

RUN mkdir -p /usr/share/nginx/html/site01.com
RUN mkdir -p /usr/share/nginx/html/site02.com

EXPOSE 80 443

WORKDIR /etc/nginx/

COPY ./conf/nginx.conf nginx.conf

RUN mv conf.d/default.conf default.conf.bak
COPY ./conf/default.conf conf.d/default.conf
COPY ./conf/site01.conf conf.d/site01.conf
COPY ./conf/site02.conf conf.d/site02.conf

# RUN while true; do sleep 1; done
