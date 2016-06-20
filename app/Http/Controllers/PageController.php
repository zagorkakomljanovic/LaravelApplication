<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\User1;

class PageController extends Controller
{
	public function home()
	{
			$user1s= User1::all();
    return view('welcome',compact('user1s'));
	}

	public function about()
	{
			return view('pages.about'); 
	}

	public function thankyou()
	{
			return view('thankyou'); 
	}

}
