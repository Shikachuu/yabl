#!/usr/bin/env just --justfile

alias b := build
alias r := run
alias t := test
alias l := lint

@build:
    DOCKER_BUILDKIT=1 docker build -t ghcr.io/shikachuu/yabl:latest -f infrastructure/Dockerfile .

@run:
    docker run --rm -it -p 8000:8000 --env-file .env -v $PWD:/app ghcr.io/shikachuu/yabl:latest

@migrate:
    docker run --rm -it --env-file .env -v $PWD:/app ghcr.io/shikachuu/yabl:latest php artisan migrate

@seed:
    docker run --rm -it --env-file .env -v $PWD:/app ghcr.io/shikachuu/yabl:latest php artisan db:seed

@test:
    docker run --rm -it --env-file .env -v $PWD:/app ghcr.io/shikachuu/yabl:latest php artisan test

@lint:
    just ide
    docker run --rm -it --env-file .env -v $PWD:/app ghcr.io/shikachuu/yabl:latest php vendor/bin/pint

@ide:
    docker run --rm -it --env-file .env -v $PWD:/app ghcr.io/shikachuu/yabl:latest php artisan ide-helper:meta -q
    docker run --rm -it --env-file .env -v $PWD:/app ghcr.io/shikachuu/yabl:latest php artisan ide-helper:generate -H -M -n
    docker run --rm -it --env-file .env -v $PWD:/app ghcr.io/shikachuu/yabl:latest php artisan ide-helper:models -W -q
