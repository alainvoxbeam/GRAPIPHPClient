Descripción:
------------

Genius Referrals en un intento de mejorar el proceso de integración con sus servicios ha creado esta biblioteca (cliente). 
La cual permite a sus clientes, a través de PHP, consumir los recursos de su RESTful API localizada en http://api.geniusreferrals.com/doc/. 

Instalación:
------------

The instalation process for this client in very simple and you can do it using different ways. 

### Using Composer

We recommend to use composer to install the client. 

#### 1- Install Composer

```cd``` into the directory of your project (eg: my_project) and run:

```
curl -sS https://getcomposer.org/installer | php
```

#### 2- Add the GRAPIPHPClient package as a dependency by running: 

```
php composer.phar require geniusreferrals/gr-api-php-client:dev-master
```

#### 3- Require Composer's autoloader

```
require_once '../vendor/autoload.php';
```

### Using Git

#### 1- Clone the repo 

If you don't want to use composer you can install the package by cloning the git repo. 
```cd``` into the folder you want to save the package in and run: 

```
git clone git@github.com:GeniusReferrals/GRAPIPHPClient.git
```

#### 2- Require the client class on the class you want to use the client. 

``` 
require_once 'src/GeniusReferrals/GRPHPAPIClient.php';
```` 

### Downloading the GRAPIPHPClient client

#### 1- Download the package

Download the zip client using this link [GRAPIPHPClient](https://github.com/GeniusReferrals/GRAPIPHPClient/archive/master.zip), 
unzip the package and save it in a folder under your project directory. 

#### 2- Require the client class on the class you want to use the client. 

``` 
require_once 'src/GeniusReferrals/GRPHPAPIClient.php';
```` 

Using the Client
----------------

```
<?php

require_once '../vendor/autoload.php';

use GeniusReferrals\GRPHPAPIClient;

// Create a new GRPHPAPIClient object
$objGeniusReferralsAPIClient = new GRPHPAPIClient('YOUR_USERNAME', 'YOUR_API_TOKEN');

//Test authentication
$jsonResponse = $objGeniusReferralsAPIClient->testAuthentication();

// Get the list of Genius Referrals client accounts
$jsonResponse = $objGeniusReferralsAPIClient->getAccounts();

// Get the response from the previous request
$aryResponse = json_decode($jsonResponse);

// Get the response code from the previous request
$intResponseCode = $objGeniusReferralsAPIClient->getResponseCode();

// Create new advocate
$aryAdvocate = array('advocate' => array("name" => "Jonh", "lastname" => "Smith", "email" => "jonh@email.com", "payout_threshold" => 10));
$objGeniusReferralsAPIClient->postAdvocate('example-com', $aryAdvocate);

// Get the response code from the previous request
$intResponseCode = $objGeniusReferralsAPIClient->getResponseCode();
 
```

### Más ejemplos

Hemos implementado varios ejemplos donde se muestra cómo utilizar la biblioteca. Por favor revise [Integration examples](examples.en.md).

Para probar los ejemplos debe sustituir los parameters YOUR_USERNAME y YOUR_API_TOKEN por su usuario y api token asignados en la plataforma Genius Referrals.

Unit testing
------------

Genius Referral PHP API uses PHPUnit for unit testing. In order to run the unit tests, you'll first need to install the dependencies of the project using Composer: ```php composer.phar install --dev```. 

You can then run the tests using using the following command at the project root:
```
phpunit -c vendor/geniusreferrals/genius-api-php-client/
```

If you are running the tests with xdebug enabled, you may encounter the following issue: ```Fatal error: Maximum function nesting level of '100' reached, aborting!```. This can be resolved by adding ```xdebug.max_nesting_level = 200``` to your php.ini file.



Reportando un problema o nueva funcionalidad:
---------------------------------------------

Para reportar un problema utilice [Github issue tracker.](https://github.com/GeniusReferrals/GRAPIPHPClient/issues)
