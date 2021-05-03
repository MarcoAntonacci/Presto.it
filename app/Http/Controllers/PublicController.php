<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Models\Category;
use App\Jobs\ResizeImage;
use App\Mail\ContactMail;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function index () {
        $categories = Category::all();
        $ads=Ad::where('is_accepted', true)->orderBy('created_at', 'DESC')->take(5)->get();
        

        return view('index', compact('categories', 'ads'));
    }

    public function search (Request $request) {

        $tests=Category::all();
        $lastFives=Ad::where('is_accepted', true)->orderBy('created_at', 'DESC')->take(5)->get();
        $q = $request->q;
        $ads = Ad::search($q)->orderBy('created_at', 'DESC')->get();

        foreach ($tests as $test) {
            if ($q == $test->name) {
                if (count($ads) > 0){
                    foreach ($ads as $ad) {
                        $cat = $ad->category->id;
                    }
                    return redirect(route('category', $cat));
                } else
                $cat = $test->id;
                return redirect(route('category', $cat));
            }
        }

        if(count($ads) > 0){
            foreach ($ads as $ad) {
                $searchId=$ad->category_id;
            }
            $relations=Ad::where('category_id', $searchId)->orderBy('created_at', 'DESC')->get();
            return view('search_results', compact('q', 'ads', 'relations'));
        }

        return view('search_results', compact('q', 'ads', 'lastFives'));
    }

    public function category($cat){

        $category=Category::where('id', $cat)->pluck('name')->pop();

        $ads=Ad::where('category_id', $cat)->get();

        return view('category', compact('ads', 'category'));
    }


    public function lavoraConNoi() {
        return view('lavora-con-noi');
    }

    public function submit (Request $request) {
        $name = $request->input('name');
        $email = $request->input('email');
        $message = $request->input('message');
        $contact = compact ('name', 'email', 'message');

        Mail::to($email)->send(new ContactMail($contact));

        return redirect(route('homepage'))->with('message', 'La tua richiesta è stata inoltrata!');
    }


    public function locale ($locale) {
        session()->put('locale', $locale);
        return redirect()->back();
    }

}


// $truncated = Str::limit('description', 20);
