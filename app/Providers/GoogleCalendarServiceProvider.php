<?php
namespace App\Providers;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Config;

class GoogleCalendarServiceProvider
{
	protected $client;

	protected $service;

	protected $calendarId;


	function __construct() {
		/* Get config variables */
		$config = base_path() . Config::get('google.config_file');
		$this->calendarId = Config::get('google.calendar_id');

		/* Add the scopes you need */
		$scopes = [\Google_Service_Calendar::CALENDAR];

		$this->client = new \Google_Client();
		$this->client->setApplicationName("Nine Worlds Kindred");
		$this->service = new \Google_Service_Calendar($this->client);

		/* If we have an access token */
		if (Cache::has('service_token')) {
			$this->client->setAccessToken(Cache::get('service_token'));
		}

		$this->client->setAuthConfig($config);
		$this->client->useApplicationDefaultCredentials();
		$this->client->setScopes($scopes);

		Cache::forever('service_token', $this->client->getAccessToken());
	}

	public function getEvents()
	{
		$options = [
			'singleEvents' => true,
			'orderBy' => 'startTime',
			'timeMin' => date('Y-m-d\TH:i:s\Z', strtotime('now - 6 months')),
			'timeMax' => date('Y-m-d\TH:i:s\Z', strtotime('now + 1 year')),
			'showDeleted' => false
		];
		return $this->service->events->listEvents($this->calendarId, $options);
	}
}