<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Validator;

class UserController extends Controller
{
    public function signup(Request $request){
    	$post = array_except($request->all(),['_token']);
    	$validator = Validator::make($post, [
            'email' => 'required|email|unique:users|max:255',
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
    	$result = User::insert($post);
    	if($result){
    		return back()->with('success', 'Data submitted successfully!');
    	}else{
    		return back()->with('error', 'Something went wrong. Try again later');
    	}
    }

    public function registerAPI(Request $request){
    	$post = array_except($request->all(),['_token']);
    	$validator = Validator::make($post, [
            'email' => 'required|email|unique:users|max:255',
        ]);
        if ($validator->fails()) {
	        $response = [
	        	'success' => false,
	        	'errors'=>$validator->errors()
	        ];
	        return response()->json($response);
        }
    	$result = User::insert($post);
    	if($result){
    		$response = [
	        	'success' => true,
	        	'message'=> 'Data submitted successfully!'
	        ];
	        return response()->json($response);
    	}else{
    		$response = [
	        	'success' => true,
	        	'message'=> 'Something went wrong. Try again later'
	        ];
	        return response()->json($response);
    	}
    }


    
}
