# syntax=docker/dockerfile:1.2
FROM composer:2 as dependencyInstall
COPY . /app
WORKDIR /app
RUN --mount=type=cache,target=/app/vendor \
    composer install \
    --prefer-dist \
    --no-dev --no-scripts \
    --no-progress --quiet \
    --optimize-autoloader \
    --ignore-platform-req=pdo_mysql \
    --ignore-platform-req=ext-sockets

FROM ghcr.io/roadrunner-server/roadrunner:2.11.3 AS roadrunner

FROM php:8.1-cli-alpine
COPY --from=dependencyInstall /app /app
COPY --from=roadrunner /usr/bin/rr /usr/local/bin/rr
WORKDIR /app
RUN apk add --no-cache ca-certificates && docker-php-ext-install pdo_mysql sockets
CMD ["php", "artisan", "octane:start", "--host=0.0.0.0"]

EXPOSE 8000
