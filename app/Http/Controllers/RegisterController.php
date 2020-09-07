<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Tretmans;

class RegisterController extends Controller
{

	   public function home()
     {

      $tretmans = Tretmans::latest()->get();


      
       return view('pages.index', compact('tretmans'));
     }

    public function create()
    {
      return view('user.create');
    }

    public function store(User $user)
    {
          $this->validate(request(), [

            'name' => 'required',

            'email' => 'required|email',

            'password' => 'required'


          ]);


    $password = Hash::make('secret');


     $user = User::create(['name' => request('name'), 'email' => request('email'), 'password' => Hash::make(request('password'))





 ]);

     


    auth()->login($user);

    return redirect('index');
    }
}
