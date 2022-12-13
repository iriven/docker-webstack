#syntax=docker/dockerfile:1.4
FROM atchondjo/php81-fpm:latest

ENV TZ=Europe/Paris \
    APP_DIR=/var/www/webroot \
    RUNTIME_USER="www-data"

ENV PHP_INI_DIR /usr/local/etc/php

ADD install-composer-*/ /usr/local/bin/

RUN set -eux; \
    apk update && apk upgrade && \
    chmod +x /usr/local/bin/install-composer-* ;\
    ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone ;\
    mkdir -p "$PHP_INI_DIR/conf.d"; \
    [ ! -d $APP_DIR ] && mkdir -p $APP_DIR; \
    # $(install-composer-deps "$APP_DIR"); \
    chown ${RUNTIME_USER}:${RUNTIME_USER} $APP_DIR; \
    chmod 755 $APP_DIR

ADD ini.d/ $PHP_INI_DIR/conf.d/
ADD pool.d/ /usr/local/etc/php-fpm.d/
ADD logrotate.d/ /etc/logrotate.d/

WORKDIR ${APP_DIR}

# RUN set -eux; \
#     # $IS_COMPOSER_PROJECT="$(ls -1 './composer.*')" && \
#     [ ! -f 'composer.json' ] && composer install;
# # [ ! -f './composer.json' ] && composer install;

EXPOSE 9000

STOPSIGNAL SIGQUIT

# ENTRYPOINT ["install-composer-deps", "/var/www/webroot" ]

CMD ["php-fpm"]
# RUN set -eux &&\
#     if [ -n "${APP_DIR}/composer.json" ] ; then \
#     cd ${APP_DIR} && echo 'Installing required project dependencies' && composer require;
#     fi

# entrypoint: [ "bash", "-c", "sleep 10 && mongo --host mongo:27017 --eval 'rs.initiate()'"]
# WORKDIR /your/base/path
# COPY --from=composer /usr/bin/composer /usr/bin/composer
# RUN set -eux; \
#     $IS_COMPOSER_PROJECT=$( ls -l composer.* ); \
#     [ ! -z $IS_COMPOSER_PROJECT ] && composer install;