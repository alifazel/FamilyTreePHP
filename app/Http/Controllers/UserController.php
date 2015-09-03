<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;


class UserController extends Controller {
	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function login() {
		return View('user/login');
	}

	public function doLogin() {
	}

	public function logout() {
	}

	public function register() {
		return View('user/register');
	}

	public function doRegister() {
	}
}