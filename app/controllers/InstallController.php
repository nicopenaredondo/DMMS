<?php

class InstallController extends Controller
{

	public function getInstall(){
		return View::make('installer.index');
	}

	public function postInstall(){
		$validate = Validator::make(Input::all(),Install::$rules);
		if($validate->passes()){

			//rollback in case of failures btch
			DB::beginTransaction();
			$user_data = array(
					'username' 		=> Input::get('username'),
					'role_id'  		=> 1,
					'password' 		=> Hash::make(Input::get('password')),
					'isActive'		=> TRUE,
					'created_at'	=> date('Y-m-d H:i:s'),
					'updated_at'	=> date('Y-m-d H:i:s')
				);
			$user_result = DB::table('users')->insert($user_data);

			$company_data = array(
					'company_name' 				=> Input::get('company_name'),
					'company_service'			=> Input::get('company_service'),
					'company_address'			=> Input::get('company_address'),
					'company_description'	=> Input::get('company_description'),
					'created_at'					=> date('Y-m-d H:i:s'),
					'updated_at'					=> date('Y-m-d H:i:s')
				);
			$company_result = DB::table('company')->insert($company_data);

			if($user_result == true && $company_result == true){
				DB::commit();
				$message = 'You have successfully installed the application.';
				Session::flash('success', $message);
				return Redirect::route('auth.login');
			}else{
				DB::rollBack();
				$message = 'Failed to install the application. Please try again';
				Session::flash('error', $message);
				return Redirect::route('install');
			}
		}else{
			return App::abort(404);
		}
	}

}