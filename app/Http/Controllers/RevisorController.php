<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use Illuminate\Http\Request;

class RevisorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.revisor');
    }

    public function index() {
        $ad=Ad::where('is_accepted', null)->orderBy('created_at', 'DESC')->first();

       return view('revisor.index', compact('ad'));
    }

    public function setOk($ad_id, $value) {
        $ad=Ad::find($ad_id);
        $ad->is_accepted=$value;
        $ad->save();

        return redirect(route('revisor.index'));
    }

    public function accepted($ad_id){
        return $this->setOk($ad_id, true);
    }

    public function rejected($ad_id){
        return $this->setOk($ad_id, false);
    }

    public function trash(){

        $ad=Ad::where('is_accepted', false)->orderBy('created_at', 'DESC')->first();
        
        return view('revisor.trash', compact('ad'));
    }
}
