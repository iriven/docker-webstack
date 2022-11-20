#syntax=docker/dockerfile:1.4
FROM atchondjo/php81-fpm:latest

ENV TZ=Europe/Paris \
    APP_DIR=/var/www/webroot \
    RUNTIME_USER="www-data"

ENV PHP_INI_DIR /usr/local/etc/php

RUN set -eux; \
    apk update && apk upgrade && \
    ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone ;\
    mkdir -p "$PHP_INI_DIR/conf.d"; \
    [ ! -d $APP_DIR ] && mkdir -p $APP_DIR; \
    chown ${RUNTIME_USER}:${RUNTIME_USER} $APP_DIR; \
    chmod 755 $APP_DIR

ADD ini.d/ $PHP_INI_DIR/conf.d/
ADD pool.d/ /usr/local/etc/php-fpm.d/

WORKDIR ${APP_DIR}

STOPSIGNAL SIGQUIT

EXPOSE 9000

CMD ["php-fpm"]
