FROM php:7.2-fpm-alpine
LABEL maintainer "Patrick Baber <patrick.baber@ueberdosis.io>"

# Install dependencies
RUN apk --update add \
    autoconf \
    build-base \
    && \
    docker-php-ext-install \
    pdo \
    pdo_mysql \
    && \
    rm -rf /var/cache/apk/* && \
    apk del \
    autoconf \
    build-base

# Copy application
COPY --chown=www-data:www-data src/ /var/www/html/