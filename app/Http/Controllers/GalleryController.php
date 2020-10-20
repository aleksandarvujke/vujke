<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Gallery;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function index()
    {
    	# code...
    }

    public function create()
    {
    	return view('gallery.create');
    }

    public function store(Request $request)
    {
    	$data = request()->validate([

    	'body' => 'required',

    	'image' => ['required', 'image'],

    	]);

    	
    	$imagePath = request('image')->store('gallery', 'path');

    	$image = Image::make(public_path("images/{$imagePath}"))->fit(2000, 1200);

    	$image->save();

    	Gallery::create([
    		
    		'body' => request('body'),

    		'image_name' => $imagePath]);

    	return redirect()->back()->with('Message', 'Uspešno ste dodali fotografiju');
    }
}
