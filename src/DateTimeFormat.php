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
	public function now() 
	{
		$date = new DateTime();
		return $date->format('m-d-y');
	}

	/**
	 * Get tomorrow date
	 *
	 * @author SetKyarWaLar
	 **/
	public function tomorrow()
	{
		$date = new DateTime("tomorrow");
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
	public function lastDayOfthisMonth()
	{
		$date = new DateTime('last day of this month');
		return $date->format('m-d-y');
	}

	/**
	 * Get first day of next month
	 *
	 * @author SetKyarWaLar
	 **/
	public function firstDayOfNextMonth()
	{
		$date = new DateTime('first day of next month');
		return $date->format('m-d-y');
	}

	/**
	 * Get last day of next month
	 *
	 * @author SetKyarWaLar
	 **/
	public function lastDayOfNextMonth()
	{
		$date = new DateTime('last day of next month');
		return $date->format('m-d-y');
	}	

	/**
	 * Calculating age base on birthday
	 *
	 * @author SetKyarWaLar
	 **/
	public function age($bithdayDate)
	{
		$date 		= new DateTime($bithdayDate);
		$now 		= new DateTime();
		$interval 	= $now->diff($date);
		return $interval->y;
	}

	/**
	 * Get start of the day from now difference hours
	 *
	 * @author SetKyarWaLar
	 **/
	public function fromStartOfDay()
	{
		$start_of_today = new DateTime();
		$start_of_today->setTime(00, 00, 00);

		$current 		= new DateTime();
		$diff 	 		= $current->diff($start_of_today);
		return $diff->format('%H').' hours ago';
	}

	/**
	 * Calculating end of day from now
	 *
	 * @author SetKyarWaLar
	 **/
	public function endOfDayFromNow()
	{
		$end_of_today 	= new DateTime();
		$end_of_today->setTime(24, 60, 60);

		$current 		= new DateTime();
		$diff 	 		= $end_of_today->diff($current);
		return 'in ' . $diff->format('%H') . ' hours';
	}

	/**
	 * verifying date 
	 * user must be fill date and format type
	 *
	 * @author SetKyarWaLar
	 **/
	public function verifyDate($date, $format = 'm-d-y')
	{
		$format_date = DateTime::createFromFormat($format, $date);
		if ($format_date && $format_date->format($format) == $date) {		
			return $date;		
		}		
		
		return 'This is wrong date';		
	}
}
