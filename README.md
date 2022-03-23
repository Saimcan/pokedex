# Pokedex

----------

Pokedex project consist of two modules: Application and API.

In application, you can view all pokemons, go to detail page, edit details and update.
In API, you can list all pokemons or call a specific pokemon by it's ID.

This project's functionality is complete, PRs and issues welcome.

----------

# Getting started

## Installation

Please check the official laravel installation guide for server requirements before you start. [Official Documentation](https://laravel.com/docs/5.4/installation#installation)

Alternative installation is possible without local dependencies relying on [Docker](#docker).

Clone the repository

    git clone https://github.com/Saimcan/pokedex.git

Switch to the repo folder

    cd pokedex

Install all the dependencies using composer

    composer install

Run the database migrations (**Set the database connections in .env before migrating**)

    php artisan migrate

Seed database with using pokemons.csv

    php artisan db:seed --class=PokemonSeeder

Seed users table by creating a test user to use API

    sail php artisan db:seed --class=CreateUser

Install npm dependencies

    npm run install
    npm run build

Start the local development server

    php artisan serve

You can now access the server at http://localhost on your browser. The root folder will list all the pokemons.

## API Specification

Once all migrations and seeding are complete, you can use following links for api:

- `http://localhost/api/pokemons` - returns all pokemons
- `http://localhost/api/pokemons/<id>` - returns the specific pokemon called by ID

----------

# Code overview

## Dependencies

- [tailwind.css](https://github.com/tailwindlabs/tailwindcss) - A frontend library
- [tailwind elements](https://github.com/mdbootstrap/Tailwind-Elements) - A frontend library created with tailwind.css and twitter bootstrap

## Folders

- `app/Http/Models` - Contains all the Eloquent models
- `app/Http/Controllers/ApiControllers` - Contains all the api controllers
- `app/Http/Controllers/WebControllers` - Contains all the web controllers
- `app/Http/Middleware` - Contains the Basic Auth (Http) Middleware (AuthBasic.php)
- `config` - Contains all the application configuration files
- `database/data_files` - Contains pokemon.csv downloaded from https://github.com/veekun/pokedex/blob/master/pokedex/data/csv/pokemon.csv
- `database/migrations` - Contains all the database migrations
- `database/seeds` - Contains the database seeders
- `routes` - Contains all the api and web routes (api.php, web.php)
- `resources/css` - Contains non-compiled css
- `resources/js` - Contains non-compiled js
- `resources/views` - Contains the base layout and the other views based on app.blade.php layout

----------

# Testing API

Run the laravel development server

    php artisan serve

The api can now be accessed at

    http://localhost/api/pokemons
    http://localhost/api/pokemons/<id>

Request headers

| **Required** 	| **Key**              	| **Value**            	|
|----------	|------------------	|------------------	|
| Yes      	| Content-Type     	| application/json 	|
| Yes      	| X-Requested-With 	| XMLHttpRequest   	|
| Yes   	| Authorization    	| HTTP Basic Auth  	|

You can use test@example.com as user, test123 for password. Don't forget to select basic auth type on authorization tab if you're using postman as a testing platform. Without credentials you won't be able to get any data from API.

----------
