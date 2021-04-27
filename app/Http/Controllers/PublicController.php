<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index () {
        $categories = Category::all();
        $ads=Ad::orderBy('created_at', 'DESC')->take(5)->get();
     
        return view('index', compact('categories', 'ads'));
    }

    public function category($cat){

        $categories=Category::where('id', $cat)->get('name');
        $ads=Ad::where('category_id', $cat)->get();

        return view('category', compact('ads', 'categories'));
    }
}


// $truncated = Str::limit('description', 20);