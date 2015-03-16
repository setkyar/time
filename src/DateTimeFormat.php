<?php

namespace SetKyar\DateTimeFormat;
use DateTime;
use DateTimeZone;
use DateInterval;
use DatePeriod;

/**
* @author SetKyarWaLar
*/
class DateTimeFormat extends \DateTime
{
	/**
	 * Basic Format Date Will be (m-d-y)
	 *
	 * @author SetKyarWaLar
	 **/
	public function now() {
		$date = new DateTime();
		return $date->format('m-d-y');
	}

	/**
	 * Get first day of the current month
	 *
	 * @author SetKyarWaLar
	 **/
	public function firstDayOfthisMonth()
	{
		$date = new DateTime('first day of this month');

		return $date->format('m-d-y');
	}

	/**
	 * Get last day of this month
	 *
	 * @author SetKyarWaLar
	 **/
	public function lastDayOfthisMonth($value='')
	{
		$date = new DateTime('last day of this month');

		return $date->format('m-d-y');
	}

	/**
	 * Get first day of next month
	 *
	 * @author SetKyarWaLar
	 **/
	public function firstDayOfNextMonth($value='')
	{
		$date = new DateTime('first day of next month');

		return $date->format('m-d-y');
	}

	/**
	 * Get last day of next month
	 *
	 * @author SetKyarWaLar
	 **/
	public function lastDayOfNextMonth($value='')
	{
		$date = new DateTime('last day of next month');

		return $date->format('m-d-y');
	}	

	/**
	 * Calculating age base on birthday
	 *
	 * @author SetKyarWaLar
	 **/
	public function myAge($bithdayDate)
	{
		$date 		= new DateTime($bithdayDate);
		$now 		= new DateTime();
		$interval 	= $now->diff($date);
		return $interval->y;
	}

	public function fromStartOfDay()
	{
		$start_of_today = new DateTime();
		$start_of_today->setTime(00, 00, 00);
		$current 		= new DateTime();

		$diff = $current->diff($start_of_today);

		return $diff->format('%H');
	}
}
