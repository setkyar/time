<?php

namespace SetKyar\DateTimeFormat;
use DateTime;
use DateTimeZone;
use DateInterval;
use DatePeriod;

class DateTimeFormatTest extends \PHPUnit_Framework_TestCase
{
	public function testNow()
	{
		$now = new DateTime();
		$now_format = $now->format('m-d-y');

		$date = new DateTimeFormat;
		$this->assertEquals($date->now(), $now_format);
	}

	public function testfirstDayOfthisMonth()
	{
		//Expected start date of the month is 01
		$expected_start_date = '01';

		//Calculated start date
		$date = new DateTime('first day of this month');
		$first_day_of_this_month_start_date = $date->format('d');
		
		$this->assertEquals($first_day_of_this_month_start_date, $expected_start_date);
	}
}
