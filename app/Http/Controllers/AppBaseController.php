<?php
/**
 * Created by PhpStorm.
 * User: dragonwolf
 * Date: 6/13/16
 * Time: 3:00 PM
 */

namespace App\Http\Controllers;

class AppBaseController extends Controller
{
	public function index() {
		$user = \Auth::user();
		return view('welcome', ['user' => $user]);
	}
}