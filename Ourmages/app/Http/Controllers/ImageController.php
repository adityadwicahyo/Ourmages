<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use Session;
use Validator;

class ImageController extends Controller
{
	public function showImage($id){
		$token = session()->get('token');
		$user_id = session()->get('user_id');

    	$otp = "Bearer ".$token;

    	$client = new Client([
		    'headers' => [ 
		    	'Content-Type' => 'application/json',
		    	'Authorization' => $otp
		    ]
		]);

		$response = $client->get('127.0.0.1:8000/api/photo/' .$id. '?user_id=' . $user_id);

		$sended = json_decode($response->getBody());

		return view('view_image')->with(['data' => $sended]);
	}

	public function getImages(){
		$token = session()->get('token');
		$user_id = session()->get('user_id');

    	$otp = "Bearer ".$token;

    	$client = new Client([
		    'headers' => [ 
		    	'Content-Type' => 'application/json',
		    	'Authorization' => $otp
		    ]
		]);

		$response = $client->get('127.0.0.1:8000/api/photo?user_id=' . $user_id);

		$sended = json_decode($response->getBody());

		return view('images')->with(['data' => $sended]);
	}

    public function addImage(Request $request){
    	$data = $request->all();

    	$validator = Validator::make($data, [
			'file' => 'required',
		]);

		if ($validator->fails()) {
			return redirect('/images')
			->withErrors($validator)
			->withInput();
		}

		$file = base64_encode(file_get_contents($request->file('file')));
		$extension = $request->file('file')->extension();
		$image = "data:image/" .$extension. ";base64," . $file;

		//TOKEN
		$token = session()->get('token');
		$user_id = session()->get('user_id');

    	$otp = "Bearer ".$token;

		$client = new Client([
		    'headers' => [ 
		    	'Content-Type' => 'application/json',
		    	'Authorization' => $otp
		    ]
		]);

		$response = $client->post('127.0.0.1:8000/api/photo',
		    ['body' => json_encode(
		        [
		        	'user_id' => $user_id,
		        	'album' => $request->album,
		            'photo' => $image
		        ]
		    )]
		);

		$result = json_decode($response->getBody());

		return redirect()->back()->with('success', 'Gambar berhasil ditambahkan.');
    }

    public function deleteImage(Request $request){
    	$data = $request->all();

    	$token = session()->get('token');
		$user_id = session()->get('user_id');

    	$otp = "Bearer ".$token;

    	$client = new Client([
		    'headers' => [ 
		    	'Content-Type' => 'application/json',
		    	'Authorization' => $otp
		    ]
		]);

		$response = $client->delete('127.0.0.1:8000/api/photo/' .$request->id. '?user_id=' . $user_id);

		$sended = json_decode($response->getBody());

		if($sended->status == 200){
			return redirect()->back()->with('success', 'Gambar berhasil dihapus.');
		}
		else{
			return "Delete gagal";
		}
    }

    public function updateImage(Request $request){
    	//dd($request->id);

    	$token = session()->get('token');
		$user_id = session()->get('user_id');

    	$otp = "Bearer ".$token;

    	$client = new Client([
		    'headers' => [ 
		    	'Content-Type' => 'application/json',
		    	'Authorization' => $otp
		    ]
		]);

		$file = base64_encode(file_get_contents($request->file('file')));
		$extension = $request->file('file')->extension();
		$image = "data:image/" .$extension. ";base64," . $file;

		$response = $client->post('127.0.0.1:8000/api/photo/' .$request->id. '?user_id=' . $user_id,
		    ['body' => json_encode(
		        [
		        	'user_id' => $user_id,
		            'photo' => $image
		        ]
		    )]
		);

		$sended = json_decode($response->getBody());

    	return redirect()->back()->with('success', 'Gambar berhasil diubah.');
    }

    public function getAlbums(){
    	$token = session()->get('token');
		$user_id = session()->get('user_id');

    	$otp = "Bearer ".$token;

    	$client = new Client([
		    'headers' => [ 
		    	'Content-Type' => 'application/json',
		    	'Authorization' => $otp
		    ]
		]);

		$response = $client->get('127.0.0.1:8000/api/album/list?user_id=' . $user_id);

		$sended = json_decode($response->getBody());

		//dd($sended);

		return view('albums')->with(['data' => $sended]);
    }

    public function getImagesInAlbum($album){
    	$token = session()->get('token');
		$user_id = session()->get('user_id');

    	$otp = "Bearer ".$token;

    	$client = new Client([
		    'headers' => [ 
		    	'Content-Type' => 'application/json',
		    	'Authorization' => $otp
		    ]
		]);

		$response = $client->get('127.0.0.1:8000/api/album?user_id=' .$user_id. '&album=' .$album);

		$sended = json_decode($response->getBody());

		return view('images')->with(['data' => $sended, 'album' => $album]);
    }

    public function updateImagesInAlbum(Request $request){
    	$token = session()->get('token');
		$user_id = session()->get('user_id');

    	$otp = "Bearer ".$token;

    	$client = new Client([
		    'headers' => [ 
		    	'Content-Type' => 'application/json',
		    	'Authorization' => $otp
		    ]
		]);

		$response = $client->get('127.0.0.1:8000/api/album?user_id=' .$user_id. '&album=' .$album);

		$sended = json_decode($response->getBody());

		return view('images')->with(['data' => $sended, 'album' => $album]);
    }
}
