<?php
namespace App\Http\Controllers;

use App\Providers\GoogleCalendarServiceProvider as Calendar;

class CalendarController extends AppBaseController
{
	public function __construct()
	{
		date_default_timezone_set('America/New_York');
	}

	public function index() {
		$calendar = new Calendar();
		$events = $calendar->getEvents();
		return view('calendar', ['events' => $events['modelData']['items']]);
	}
}