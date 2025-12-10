<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Meal;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $meals = Meal::all();

        return view('home', compact('categories', 'meals'));
    }

    public function category($id)
    {
        $categories = Category::all();
        $meals = Meal::where('category_id', $id)->get();

        return view('home', compact('categories', 'meals'));
    }
}
