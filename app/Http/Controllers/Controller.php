<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use Illuminate\Http\Request;

header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept');
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    //Method for returning home view ect. page
    public function index() {
    	return view('home');
    }

    //Getting data from the Subscribe form and writing data to the database
    public function createSubscription(Request $request) {

    	$request->all();
    	return response()->json(['status' => 'OK']);
    }
}
