<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Models\Category;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index () {
        return view('index');
    }

    public function category($cat){

        $ads=Ad::where('category_id', $cat)->get();

        return view('category', compact('ads'));
    }
}
