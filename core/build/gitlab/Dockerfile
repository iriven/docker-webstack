#syntax=docker/dockerfile:1.4
FROM alpinelinux/alpine-docker-gitlab

LABEL	maintainer="Alfred TCHONDJO <tchondjo.ext@gmail.com>"

ENV TZ=Europe/Paris \
    LANG=en_US.utf8 \
    LC_ALL=en_US.UTF-8

RUN set -eux \
    && apk update && apk upgrade && apk add --no-cache --update tzdata ;\
    ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone