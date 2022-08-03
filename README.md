# Amber Moon Astrology!

A Laravel application for getting astrology horoscopes. Used in the Amber Moon Ios and Android mobile applications.
![](https://raw.githubusercontent.com/mastashake08/astrology-newsletter/d8087303617f9b2b7871a576a7e28e51ff039118/public/assets/images/icon.svg)

# Getting Started

We use Laravel Sail for local development. If you want a quick start run
```
docker-compose up
```
Otherwise
```
cp .env.example .env
composer install
php artisan key:generate
php artisan migrate
```

## Enviroment Variables

If you want to enable text message support you must add your Twilio credentials to the .env file

## Support
If you want to support this project, consider becoming a Patron on [Patreon](https://patreon.com/mastashake08)
