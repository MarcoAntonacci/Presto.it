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
        $ads=Ad::where('is_accepted', true)->orderBy('created_at', 'DESC')->take(5)->get();

        return view('index', compact('categories', 'ads'));
    }

    public function search (Request $request) {

        $q = $request->q;
        $ads = Ad::search($q)->orderBy('created_at', 'DESC')->get();
        
        foreach ($ads as $ad) {
            $searchId=$ad->category_id;
        }
        
        $relations=Ad::where('category_id', $searchId)->orderBy('created_at', 'DESC')->get();

        return view('search_results', compact('q', 'ads', 'relations'));
    }

    public function category($cat){

        $category=Category::where('id', $cat)->pluck('name')->pop();

        $ads=Ad::where('category_id', $cat)->get();

        return view('category', compact('ads', 'category'));
    }
}


// $truncated = Str::limit('description', 20);
