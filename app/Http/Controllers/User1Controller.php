<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



use App\User1;

class User1Controller extends Controller
{
    
    public function store(Request $request)
	    {
	    	
	    	$user= new User1;
	    	$user->name = $request->name;
	    	$user->email =  $request->email;
	    	$user->save();

	    	return redirect('/thankyou');
			
	    }

	    
}
