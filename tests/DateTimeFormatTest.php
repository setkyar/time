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
}
