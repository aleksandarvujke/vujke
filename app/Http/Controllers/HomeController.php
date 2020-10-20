<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Gallery;

class HomeController extends Controller
{
    public function index()
    {

    	

    	$category = Category::all();

    	return view('pages.index', compact('category', 'galleries'));
    }
}
