<?php

return [

	/*
	|--------------------------------------------------------------------------
	| Client ID
	|--------------------------------------------------------------------------
	|
	| The Client ID can be found in the OAuth Credentials under Service Account
	|
	*/
	//'client_id' => env('GOOGLE_SERVICE_CLIENT_ID'),

	/*
	|--------------------------------------------------------------------------
	| Service account name
	|--------------------------------------------------------------------------
	|
	| The Service account name is the Email Address that can be found in the
	| OAuth Credentials under Service Account
	|
	*/
	//'service_account_name' => env('GOOGLE_SERVICE_ACCOUNT'),

	/*
	|--------------------------------------------------------------------------
	| Config file location
	|--------------------------------------------------------------------------
	|
	| This is the location of the .json file from the Laravel root directory
	|
	*/
	'config_file' => '/resources/assets/files/' . env('GOOGLE_CONFIG_FILE'),

	/*
	 |-----------------------------------------------------------------------
	 | Calendar ID
	 |-----------------------------------------------------------------------
	 |
	 | This is found in the calendar settings page on Google.
	 |
	 */
	'calendar_id' => env('GOOGLE_CALENDAR_ID')
];