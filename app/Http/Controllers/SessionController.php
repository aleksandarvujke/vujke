<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class SessionController extends Controller
{
    
	public function __construct()

	{


		$this->middleware('guest', ['except' => 'destroy']);



	}

    public function create()
    {
    	return view('sessions.create');
    }

    public function store(User $user)
    {
    	
    	if(! auth()->attempt(request(['name', 'password'])))

    	{

    		return back()->withErrors(['message' => 'email ili pasvord su pogrešno uneti']);

    	}

    	 return redirect('index');
    }

    public function destroy()

    {


    	auth()->logout();

    	return redirect('index');


    }
}
