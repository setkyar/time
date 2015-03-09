 <?php

 // Display Errors On
ini_set('display_errors', 'On');

$autoload = __DIR__.'/vendor/autoload.php';

if ( ! file_exists($autoload))
{
	exit("Need to run \"composer install\" for example");
}

require $autoload;

use SetKyar\TimeFormat\TimeFormat;

var_dump('First day of the month ' . TimeFormat::firstDayOfthisMonth());
echo '<br>';
var_dump('Last day of the month ' . TimeFormat::lastDayOfthisMonth());
echo '<br>';
var_dump('First day of next month ' . TimeFormat::firstDayOfNextMonth());
