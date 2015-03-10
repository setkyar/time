<?php

namespace SetKyar\DateTimeFormat;
use DateTime;
use DateTimeZone;
use DateInterval;
use DatePeriod;

/**
* @author Set Kyar Wa Lar
*/
class DateTimeFormat extends \DateTime
{
	/**
	 * Basic Format Date Will be (m-d-y)
	 *
	 * @author Set Kyar Wa Lar
	 **/
	public function now() {
		$date = new DateTime();
		return $date->format('m-d-y');
	}

	/**
	 * Get first day of the current month
	 *
	 * @author Set Kyar Wa Lar
	 **/
	public function firstDayOfthisMonth()
	{
		$date = new DateTime('first day of this month');

		return $date->format('m-d-y');
	}

	/**
	 * Get last day of this month
	 *
	 * @author Set Kyar Wa Lar
	 **/
	public function lastDayOfthisMonth($value='')
	{
		$date = new DateTime('last day of this month');

		return $date->format('m-d-y');
	}

	/**
	 * Get first day of next month
	 *
	 * @author Set Kyar Wa Lar
	 **/
	public function firstDayOfNextMonth($value='')
	{
		$date = new DateTime('first day of next month');

		return $date->format('m-d-y');
	}

	/**
	 * Get last day of next month
	 *
	 * @author Set Kyar Wa Lar
	 **/
	public function lastDayOfNextMonth($value='')
	{
		$date = new DateTime('last day of next month');

		return $date->format('m-d-y');
	}	

}
