<?php

class Install extends Eloquent {
	public static $rules = array(
			'company_name' 				=> 'required|between:3,32',
			'company_address' 		=> 'between:3,180',
			'company_description' => 'between:3,180',
			'company_service'			=> 'required',
			'username'    				=> 'required|between:6,32',
			'password' 						=> 'required|between:6,64',
			'name' 								=> 'required|between:3,64',
			'email'   						=> 'required|email'
		);
}