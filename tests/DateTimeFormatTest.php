<?php

use SetKyar\DateTimeFormat\DateTimeFormat;

class DateTimeFormatTest extends \PHPUnit_Framework_TestCase
{
	public function testNow()
	{
		$now = new DateTime();
		$now_format = $now->format('m-d-y');
		$this->assertEquals(DateTimeFormat::now(), $now_format);
	}

	// public function testfirstDayOfthisMonth()
	// {
	// 	//Expected start date of the month is 01
	// 	$expected_start_date = '01';

	// 	$this->assertEquals(DateTimeFormat::firstDayOfNextMonth(), $expected_start_date);
	// }

	// public function testlastDayOfthisMonth()
	// {
	// 	$expected_end_month1 = '28';
	// 	$expected_end_month2 = '29';
	// 	$expected_end_month3 = '30';
	// 	$expected_end_month4 = '31';

	// 	$end_month  = DateTimeFormat::lastDayOfthisMonth();
	// }
}
