#!/usr/bin/env just --justfile
export PATH := "./node_modules/.bin:" + env_var('PATH')

alias b := build
alias r := run

build:
    DOCKER_BUILDKIT=1 docker build -t ghcr.io/shikachuu/yabl:latest -f infrastructure/Dockerfile .

run:
    docker run --rm -it -p 8000:8000 --env-file .env -v $PWD:/app ghcr.io/shikachuu/yabl:latest

migrate:
    docker run --rm -it --env-file .env -v $PWD:/app ghcr.io/shikachuu/yabl:latest php artisan migrate

seed:
    docker run --rm -it --env-file .env -v $PWD:/app ghcr.io/shikachuu/yabl:latest php artisan db:seed
