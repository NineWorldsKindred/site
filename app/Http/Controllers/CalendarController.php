<?php
namespace App\Http\Controllers;

use App\Providers\GoogleCalendarServiceProvider as Calendar;

class CalendarController extends AppBaseController
{
	public function index() {
		$calendar = new Calendar();
		$events = $calendar->getEvents();
		return view('calendar', ['events' => $events['modelData']['items']]);
	}
}