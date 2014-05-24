# Breizhcamp 2014 Hands-on "Premier pas avec Symfony" support material

Slides: https://speakerdeck.com/tonydub/premiers-pas-avec-symfony-au-breizhcamp-2014

Requirements:

- PHP >=5.3.3
- Web server: Apache or Nginx
- Mysql server
- Install globally composer (see https://getcomposer.org/doc/00-intro.md#globally)

## Part 1: Getting Ready With Components

Go to directory *web/part1* with command line:

```
cd web/part1
```

Component installation "**symfony/yaml**" with composer:

```
$ composer install
```

Run the command line script test.php to use the YAML component in standalone:


```
$ php test.php
```

## Part 2: The Symfony2 Request

Go to directory *web/part2* with command line:

```
cd web/part2
```

With PHP, the request is represented by some global variables ($ _GET, $ _POST, $ _file, $ _COOKIE, $ _SESSION ...) and the response is generated using functions (echo, header, setcookie .. .).

The Symfony2 component HttpFoundation replace these default variables and functions through a set Object Oriented.

Component installation "**symfony/http-foundation**" with composer:

```
$ composer install
```

Open http://localhost/part2/index.php in your browser.

## Part 3 : Symfony 2 Response

Go to directory *web/part3* with command line:

```
cd web/part3
```

Component installation "**symfony/http-foundation**" with composer:

```
$ composer install
```

Open http://localhost/part3/index.php in your browser.

## Part 4 : The Simplest Front Controller Ever

Go to directory *web/part4* with command line:

```
cd web/part4
```

Component installation "**symfony/http-foundation**" with composer:

```
$ composer install
```

Open http://localhost/part4/index.php in your browser.

## Part 5 : Your first framework with Symfony2 components

Go to directory *web/part5* with command line:

```
cd web/part5
```

Components installation "**symfony/http-foundation**" and "**symfony/routing**" with composer:

```
$ composer install
```

Open in your browser the following urls:

- http://localhost/part5/web/index.php
- http://localhost/part5/web/index.php/hello/tony
- http://localhost/part5/web/index.php/bye
- http://localhost/part5/web/index.php/test => 404

## Part 6 : Starting a new project with **Symfony Standard Edition**

Go to directory *web/part6* with command line:

```
cd web/part6
```

Downloading the Standard Distribution with composer:

```
$ composer create-project symfony/framework-standard-edition part6 2.4.4
```

Adding your IP to be authorized to access the app_dev.php script.

Open http://localhost/part6/web/app_dev.php in your browser.

References:
- http://symfony.com/download
- http://symfony.com/doc/current/book/installation.html
- http://symfony.com/doc/current/bundles/index.html

# Part 7 : Create an application that serves API for entity Page

This application serves API for entity Page content with get, put, post, using Symfony2, the [FOSRestBundle](https://github.com/FriendsOfSymfony/FOSRestBundle), the [NelmioApiDocBundle](https://github.com/nelmio/NelmioApiDocBundle), the [JSMSerializerBundle](https://github.com/schmittjoh/JMSSerializerBundle), and [Doctrine 2](https://github.com/doctrine/doctrine2).

Inspiration source code for *AcmeBlogBundle* from article http://welcometothebundle.com/symfony2-rest-api-the-best-2013-way/

Go to directory *web/part7* with command line:

```
cd web/part7
```

Installation dependencies with composer:

```
$ composer install
```

Creating the database with Doctrine ORM:

```
$ app/console doctrine:database:create
```

Creating the schema for the database with the doctrine ORM:

```
$ app/console doctrine:schema:create
```

Loading fixtures data via the command line:

```
$ app/console doctrine:fixtures:load

```

Open http://localhost/part6/web/app_dev.php/api/doc in your browser to consult auto generate api documentation. You can test test API methods with the mode sandbox.
