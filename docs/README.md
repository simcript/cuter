# Cuter

This is a laravel package to shorten the link


## Getting Started

Cuter helps you to make your links short and beautiful. You can use this package to shorten the links. By installing this package, you will have a link shortener link.

### Prerequisites

The cuter is a Laravel package, so you must install Laravel first to use. 

```sh
composer create-project --prefer-dist laravel/laravel CuterSite
```
Laravel is a PHP framework. Take a look at [This Link](https://laravel.com/docs) for more information.

### Installing

After installing Laravel in your Laravelan directory, run the following code through the console.

```sh
composer require simcript/cuter
```

## Configuration

To use this package, you need to create the corresponding tables in the database. To do this, run the following command:

```sh
$ php artisan migrate"
```

Config file defaults putting up in `config/cuter.php`. Copy this file to your own config directory to modify the values. You can publish the config using this command:

```sh
$ php artisan vendor:publish --provider="Simcript\Cuter\CuterServiceProvider"
```

## Built With

* [Laravel](https://laravel.com/docs) - The web framework used
* [Composer](https://getcomposer.org) - Dependency Management
* [Atom](https://atom.io) - A hackable text editor

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details

