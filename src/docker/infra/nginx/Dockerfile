#syntax=docker/dockerfile:1.4
FROM atchondjo/nginx
ENV NGINX_WEBROOT=/var/www/webroot
ENV TZ=Europe/Paris
RUN apk update && apk upgrade && apk add --no-cache vim
RUN set -x \
    # create www-data user/group first, to be consistent throughout docker variants
    && adduser -S -D -H -u 1010 -s /sbin/nologin -G nginx -g nginx www-data ;\
    ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone
COPY default.d/nginx.conf /etc/nginx/nginx.conf
ADD sites.d /etc/nginx/conf.d
RUN rm /etc/nginx/conf.d/default.conf
WORKDIR /var/www/webroot
EXPOSE 80
EXPOSE 443
CMD ["nginx"]

# useradd -r -u 5050 -g root -s /sbin/nologin pgadmin && \