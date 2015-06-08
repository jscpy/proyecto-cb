<?php  

class AuthController extends BaseController{

	public function logIn() {
		
		$username = Input::get('user');
		$password = Input::get('passw');

		if (Auth::attempt(['username' => $username, 'password' => $password])) {
			
			return Redirect::to('/admin');
		}

		else {

		return Redirect::to('/')
						->with('mensaje_error','Los datos que ingresaste son incorrectos')
						->withInput();

		}
	}

	public function logOut() {

		Auth::logout();

		return Redirect::to('/');
	
	}

}
