## Nombre del Proyecto

Cinemapp2

## Objetivo

Nustro objetivo principal es ayudar a que las personas puedan elegir una buena película viendo los comentarios que hay sobre ella, ya que a veces es muy dificil encontrar una buena película para ver.

## Integrantes

Hannia Flores
Miguel Valencia

## Instalación

git clone https://github.com/hanniafl/cinemapp2.git
cd cinemapp2
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate:fresh --seed
npm install
npm run dev
php artisan serve

