<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\db;
use Illuminate\Support\Facades\URL;

class UserController extends Controller
{
//	/**
//	 * Show the profile for the given user.
//	 *
//	 * @param  int  $id
//	 * @return Response
//	 */
//	public function show( Request $request)
//	{
//		//check the input form data
//		//print_r($request->input());
//
//		//$result = DB::select('select * from blog ');
//		//$result  = DB::insert('insert into blog (id, blog_title, blog_content , blog_date ) values (?, ? ,? ,? )', ['', 'Dayle', 'More content here',date("Y/m/d")]);
//	//print_r($result);
//	}
//
//	public function store( Request $request){
//		//print_r($result);
//
//		$result  = DB::insert('insert into users (id, name, email , password ) values (?, ? ,? ,? )',
//			['', $request->input('name'), $request->input('email') , $request->input('password')) ;
//		//print_r($result);
//		return view('blog-form', ['update' => $result] );
//
//	}
}