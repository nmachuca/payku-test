# Payku-test

## API Documentation

This API documentation is provided [here](https://documenter.getpostman.com/view/15703135/2sA2rFQzQZ)

## Local environment

This project uses docker. In order to set up locally is needed to execute:

<ol>
    <li>Clone repository</li>
    <li><code>cd localpath/payku-test/</code></li>
    <li>Execute <code>docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php83-composer:latest \
    composer install --ignore-platform-reqs</code></li>
    <li><code>cp .env.example .env</code></li>
    <li>Set env variables <code>DB_PASSWORD, DB_USERNAME</code> and <code>DB_DATABASE</code> if you want, is not needed</li>
    <li>Change env variables <code>DB_HOST</code> to <code>mysql</code></li>
    <li>Exceute <code>./vendor/bin/sail up -d</code></li>
    <li><code>./vendor/bin/sail artisan key:generate</code></li>
    <li><code>./vendor/bin/sail artisan migrate --seed</code></li>
</ol>

