<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use Session;

class AuthController extends Controller
{
	public function showAuth(){
		return view('auth');
	}

    public function loginAuth(Request $request)
    {
		$client = new Client([
		    'headers' => [ 'Content-Type' => 'application/json' ]
		]);

		$response = $client->post(env('APP_URL').'/api/auth/login',
		    ['body' => json_encode(
		        [
		            'email' => $request->email,
		            'password' => $request->password
		        ]
		    )]
		);

		$result = json_decode($response->getBody());
		session()->put('token', $result->token);
		
		$this->getUser();

		return redirect('/');
    }

    public function getUser()
    {
    	$token = session()->get('token');
    	$otp = "Bearer ".$token;

    	$client = new Client([
		    'headers' => [ 
		    	'Content-Type' => 'application/json',
		    	'Authorization' => $otp
		    ]
		]);

		$response = $client->get(env('APP_URL').'/api/user');

		$sended = json_decode($response->getBody());

		session()->put('name', $sended->user->name);
		session()->put('email', $sended->user->email);
		session()->put('user_id', $sended->user->_id);
    }

    public function logoutAuth()
    {
    	$token = session()->get('token');
    	$otp = "Bearer ".$token;

    	$client = new Client([
		    'headers' => [ 
		    	'Content-Type' => 'application/json',
		    	'Authorization' => $otp
		    ]
		]);

		$response = $client->post(env('APP_URL').'/api/auth/logout',
		    ['body' => json_encode(
		        [
		            'token' => $token
		        ]
		    )]
		);

		$sended = json_decode($response->getBody());
		if($sended->status == 'success') {
			session()->forget('token');
			session()->forget('email');
			session()->forget('name');

			return redirect('/');
		} else {
			return "gagal logout";
		}
    }

    public function registerAuth(Request $request){
    	$client = new Client([
		    'headers' => [ 'Content-Type' => 'application/json' ]
		]);

		$response = $client->post(env('APP_URL').'/api/auth/register',
		    ['body' => json_encode(
		        [
		        	'name' => $request->name,
		            'email' => $request->email,
		            'password' => $request->password,
		            'password_confirmation' => $request->password_confirmation
		        ]
		    )]
		);

		$result = json_decode($response->getBody());
		session()->put('token', $result->token);
		
		$this->getUser();

		return redirect('/');
    }

    public function joko(){
    	session()->forget('token');
		session()->forget('email');
		session()->forget('name');
    }
}
