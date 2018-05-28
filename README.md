# Showcase for black-bits/laravel-api-consumer package

This is an example implementation for the package [black-bits/laravel-api-consumer](https://github.com/black-bits/laravel-api-consumer).

It demonstrates the currently implemented functionality by consuming two simple APIs.


## Installation

Clone this repository

```bash
git clone https://github.com/black-bits/laravel-api-consumer-showcase.git
```

Navigate into the project directory and install [composer](https://getcomposer.org/) requirements

```bash
composer install
```

Copy the env example and generate a key (if you are using Windows replace `cp` with `copy`)

```bash
cp .env.example .env
php artisan key:generate
```

## What now?

 - We have implemented two simple APIs ([IEX Trading API](https://iextrading.com/developer/docs/) and [JSONPlaceholder](https://jsonplaceholder.typicode.com/)) 
 - IEX Trading API does not offer full REST capabilities. We make use of our [CollectionCallbacks](app/CollectionCallbacks/FilterNameCollectionCallback.php) to filter/search Companies by Symbol or Name
 - JSONPlaceholder API offers a straight forward REST API that returns demo data. We have implemented a `where` Method in our [Endpoint](app/ApiConsumers/JSONPlaceholder/Endpoints/PostEndpoint.php)
 - All the API related code is located in the [app/ApiConsumers](app/ApiConsumers) directory
 - The [SymbolEndpoint](app/ApiConsumers/IEX/Endpoints/SymbolEndpoint.php) has caching enabled (10 min)
 
  
 ## Feedback
 
 If you have any questions or feedback feel free to contact us at [hello@blackbits.io](mailto:hello@blackbits.io).
 