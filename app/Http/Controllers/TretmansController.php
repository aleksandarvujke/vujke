<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Tretmans;


class TretmansController extends Controller
{

	public function index()
	{
		$tretmans = Tretmans::all();

		return view('tretmans.index', compact('tretmans'));	
	}

    public function create()
    {
    	return view('tretmans.create');
    }

    public function store()
    {
    	
    		
    	$data = request()->validate([

    	'title' => 'required',

    	'body' => 'required',

    	'price' => 'required',

    	'image' => ['required', 'image'],

    	]);




    	$imagePath = request('image')->store('uploads', 'public');

    	$image = Image::make(public_path("storage/{$imagePath}"))->fit(2000, 1200);

    	$image->save();




    	Tretmans::create([
    		
    		'title' => request('title'),

    		'body' => request('body'),

    		'price' => request('price'),

    		'image' => $imagePath]);

    	return redirect()->back();
    }
}
