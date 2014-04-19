<?php

class AuthController extends BaseController
{

	public function getLogin(){

		return View::make('auth.login');
	}

	public function postLogin(){
		$credentials = array(
				'username' 		=> Input::get('username'),
				'password'		=> Input::get('password')
			);

		$validate = Validator::make($credentials,User::$loginRules);

		if($validate->passes()){
			if(Auth::attempt($credentials)){
				return Redirect::to('dashboard');
			}else{
				Session::flash('error','Invalid login credentials');
				return Redirect::route('auth.login');
			}
		}else{
			$message = 'You have errors in your form. Please check it and try again';
			Session::flash('error',$message);
			return Redirect::route('auth.login')
										 ->withInput()
										 ->withErrors($validate);
		}

	}

	public function getForgotPassword(){
		var_dump('GET - Forgot Password');
	}

	public function postForgotPassword(){
		var_dump('POST - Forgot Password');
	}

	public function getChangeForgotPassword($token){
		var_dump('GET - Change Forgot Password');
	}

	public function postChangeForgotPassword($token){
		var_dump('POST - Change Forgot Password');
	}

}