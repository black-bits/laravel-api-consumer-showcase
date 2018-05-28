# Showcase for black-bits/laravel-api-consumer package

This is an example implementation for the package You can find an example implementation here: [black-bits/laravel-api-consumer](https://github.com/black-bits/laravel-api-consumer).
It showcases and explains the currently implemented functionality.


## Installation

Clone this repository

```bash
git clone https://github.com/black-bits/laravel-api-consumer-showcase.git
```

Navigate into the project directory and install composer requirements

```bash
composer install
```

Copy the env example and generate a key (if you are windows replace `cp` with `copy`)

```bash
cp .env.example .env
php artisan key:generate
```

## What now?

 - We have implemented two simple APIs ([IEX Trading API](https://iextrading.com/developer/docs/) and [JSONPlaceholder](https://jsonplaceholder.typicode.com/)) 
 - IEX Trading API does not offer full REST capabilities. We make use of our [CollectionCallbacks](app/CollectionCallbacks/FilterNameCollectionCallback.php) to filter/search Companies by Symbol or Name
 - JSONPlaceholder API offers a straight forward REST API that returns demo data. We have implemented a `where` Method in our [Endpoint](app/ApiConsumers/JSONPlaceholder/Endpoints/PostEndpoint.php)
 - All the API related code is located in the [app/ApiConsumers](app/ApiConsumers) directory.
 - The [SymbolEndpoint](app/ApiConsumers/IEX/Endpoints/SymbolEndpoint.php) has caching enabled (10 min)