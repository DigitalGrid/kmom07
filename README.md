Project - All About X-Men
==========================

A project of the course PHPMVC at BTH, based on Anax-MVC

By Christofer Jadelius

How to install
--------------------------

###Install the software
First of all you have to clone or download the repository

```php
	git clone https://github.com/DigitalGrid/kmom07.git
```

Depending on the location of your project folder you may have to configure the file webroot/.htaccess. Uncomment the line below and change it to you directory. If you work locally you should not need to change anything.

```php
	RewriteBase /~chja15/phpmvc/projekt/Anax-MVC/webroot/
```

###Manage the database
The project uses a SQLite database which can be found via this path:

```php
	webroot/.htsqlite.db
```
You will probably have to change the file permission on the SQLite file so it's writeable. If there are any problems using the database you may have to change the webroot folder so it's writeable too.
