#syntax=docker/dockerfile:1.4
FROM atchondjo/php8-fpm:latest

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

ADD conf.d/ $PHP_INI_DIR/conf.d/
ADD php-fpm.d/ /usr/local/etc/php-fpm.d/
ADD logrotate.d/ /etc/logrotate.d/
# prevent the reinstallation of vendors at every changes in the source code

WORKDIR ${APP_DIR}

# # copy sources
# COPY --link  . .
# # RUN set -eux; \
# #     # $IS_COMPOSER_PROJECT="$(ls -1 './composer.*')" && \
# #     [ ! -f 'composer.json' ] && composer install;
# # # [ ! -f './composer.json' ] && composer install;

EXPOSE 9000

STOPSIGNAL SIGQUIT

# ENTRYPOINT ["install-composer-deps", "/var/www/webroot" ]

CMD ["php-fpm"]

# ENV COMPOSER_ALLOW_SUPERUSER=1
# ENV PATH="${PATH}:/root/.composer/vendor/bin"


# RUN set -eux; \
#     if [ -f composer.json ]; then \
#     composer install --prefer-dist --no-dev --no-autoloader --no-scripts --no-progress; \
#     composer clear-cache; \
#     fi


# RUN set -eux; \
#     mkdir -p var/cache var/log; \
#     if [ -f composer.json ]; then \
#     composer dump-autoload --classmap-authoritative --no-dev; \
#     composer dump-env prod; \
#     composer run-script --no-dev post-install-cmd; \
#     chmod +x bin/console; sync; \
#     fi
# [ ! -f 'composer.json' ] || composer install;

# RUN <<EOF
#     composer install --prefer-dist --no-dev --no-scripts --no-progress;
#     composer clear-cache;
# EOF
