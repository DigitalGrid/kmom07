Cfmessage
====================

[![Build Status](https://travis-ci.org/DigitalGrid/cfmessage.svg?branch=master)](https://travis-ci.org/DigitalGrid/cfmessage)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/DigitalGrid/cfmessage/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/DigitalGrid/cfmessage/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/DigitalGrid/cfmessage/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/DigitalGrid/cfmessage/?branch=master)

Module that shows flash messages. It handels messages for success, information and errors for the user.

By Christofer Jadelius

###License

This software is free software and carries a MIT license.

###How to install

First you have to include this code in your composer.json file:

```php
"require": {
	"chja/cfmessage": "dev-master"
},
```

###How to use with Anax/MVC

After you have downloaded the package add this code to your front-controller:

```php
$di->set('Cfmessage', function() use ($di) {
    $message = new \Chja\Cfmessage\CfmessageAnax();
    $message->setDI($di);
    return $message;
});
```

Note: Before you start adding messages you will have to start a session if you have not done that yet.

Now you can start adding all the messages you want to use. below you can see some examples.

Info messages:

```php
	$app->Cfmessage->addNotice('This is an information message'); 
```

Error messages:

```php
	$app->Cfmessage->addError('This is an error message'); 
```

success messages:

```php
	$app->Cfmessage->addSuccess('This is a success message'); 
```

warning messages:

```php
	$app->Cfmessage->addWarning('This is a warning message'); 
```

When a message has been added it will be saved in the session, use these lines to print the message/messages:

```php
	$messages = $app->Cfmessage->printMessage();
    $app->views->addString($messages);
```

You can also clear the session by invoking this method:

```php
	$app->Cfmessage->clearSession();
```

All the messages are using icons from Font Awesome. Font Awesome is not required but the meaning of the messages will be a little bit clearer if you use it.
    
    