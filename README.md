PHP Times
==========
##Installation

Run the following via your terminal
	
	composer require "setkyar/datetimeformat"

##Usage

Create a `index.php` and put the following code and run `$php -S localhost:8000`

	<?php
		// Display Errors On
		ini_set('display_errors', 'On');

		$autoload = __DIR__.'/vendor/autoload.php';

		if ( ! file_exists($autoload))
		{
		  exit("Need to run \"composer install\"!");
		}

		require $autoload;

		use SetKyar\DateTimeFormat\DateTimeFormat;
		
		//What you want to use functions goes here!

##Functions

	####Get today
	
	```php
	DateTimeFormat::now();
	```

	####Get first day of the month 
	
	```php
	DateTimeFormat::firstDayOfthisMonth();
	```
	####Get last day of the month 
	
	```php
	DateTimeFormat::lastDayOfthisMonth());
	```
	
	####Get First day of next month 		
	
	```php
	DateTimeFormat::firstDayOfNextMonth());
	```
	
	####Last Dat of Next Month
	
	```php
	DateTimeFormat::lastDayOfNextMonth();
	
	DateTimeFormat::age('22-11-1994');

	DateTimeFormat::fromStartOfDay();

	DateTimeFormat::endOfDayFromNow();

	DateTimeFormat::verifyDate('16-03-2015', 'd-m-y');
	```
	
##Contributing

- Fork it ( https://github.com/setkyar/time )
- Create your feature branch (git checkout -b my-new-feature)
- Commit your changes (git commit -am 'Add some feature')
- Push to the branch (git push origin my-new-feature)
- Create a new Pull Request
- Stars are welcome too :smile:

##License

WTFPL
