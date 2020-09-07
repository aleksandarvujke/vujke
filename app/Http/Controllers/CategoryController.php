<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function index()
    {
    	$category = Category::category();


    	return view('categories.index', compact('category'));
    }
}
