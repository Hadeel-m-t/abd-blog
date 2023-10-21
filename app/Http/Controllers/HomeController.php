<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class HomeController extends Controller
{
    
    // Upload CV
    public function store (Request $request) 
    {

    	$user_id = Auth::id();
        $user = User::find($user_id);
  		
        $file_extension = $request->file->getClientOriginalExtension();
        $file_name = time(). '.' . $file_extension;
        $request->file->move('file', $file_name);
        		

        $user->cv = $file_name;

        $user->save();

       	return redirect()->back();
 		
	}

	public function download () 
	{

		$user = User::where('id', 2)->get();

		return response()->download(public_path('file/'. '1697202552.pdf'));
	}
}