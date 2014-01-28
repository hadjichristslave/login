<?php namespace Slave\Login;

use Controller;
use Input;
use Validpack;
use Hash;
use View;
use Response;

class LoginController extends Controller {

	public function getIndex(){
		Loginmod::hellomode();
	}





}