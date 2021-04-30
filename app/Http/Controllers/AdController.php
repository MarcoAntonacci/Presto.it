<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Models\AdImage;
use App\Models\Category;
use Faker\Provider\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class AdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $ads=Ad::all()->sortBy('created_at');
        $ads = Ad::where('is_accepted', true)->orderBy('created_at', 'DESC')->get();
        return view('ad.index', compact('ads'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $uniqueSecret= $request->old('uniqueSecret', base_convert(sha1(uniqid(mt_rand())), 16, 36));
        $categories=Category::all();
        return view('ad.create', compact('categories', 'uniqueSecret'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ad=Ad::create([
            'title'=>$request->title,
            'price'=>$request->price,
            'description'=>$request->description,
            'category_id'=>$request->category
        ]);
        $uniqueSecret=$request->uniqueSecret;

        $images=session()->get("images.{$uniqueSecret}", []);
        $removedImages=session()->get("removedimages.{$uniqueSecret}", []);

        $images=array_diff($images, $removedImages);

        foreach ($images as $image) {
            $i=new AdImage();
            $fileName=basename($image);
            $newFileName="public/ads/{$ad->id}/{$fileName}";
            Storage::move($image, $newFileName);
            $i->file=$newFileName;
            $i->ad_id=$ad->id;
            $i->save();
        }

        File::deleteDirectory(storage_path("/app/public/temp/{$uniqueSecret}"));
 
        return redirect(route('ad.index'))->with('flash', 'Ottimo! Il tuo annuncio è in fase di revisione!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ad  $ad
     * @return \Illuminate\Http\Response
     */
    public function show(Ad $ad)
    {
        $categories=Category::all();
        return view('ad.show', compact('ad', 'categories'));
    }

    public function lastFive(Ad $ad)
    {
        $categories=Category::all();
        return view('lastFive', compact('ad', 'categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ad  $ad
     * @return \Illuminate\Http\Response
     */
    public function edit(Ad $ad)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ad  $ad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ad $ad)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ad  $ad
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ad $ad)
    {
        //
    }

    public function upload(Request $request){
        $uniqueSecret=$request->input('uniqueSecret');
        $fileName=$request->file('file')->store("public/temp/{$uniqueSecret}");
        session()->push("images.{$uniqueSecret}", $fileName);

        return response()->json(
            [
                'id'=>$fileName,
            ]
        );
    }

    public function remove(Request $request){
         $uniqueSecret=$request->input('uniqueSecret');
         $fileName=$request->input('id');
         session()->push("removedimages.{$uniqueSecret}", $fileName);
         Storage::delete($fileName);
         return response()->json('ok');
    }

    public function getImages(Request $request){
        $uniqueSecret=$request->uniqueSecret;
        $images=session()->get("images.{$uniqueSecret}", []);
        $images=array_diff($images, $removedImages);
        $data=[];

        foreach ($images as $image) {
            $data[] = [
                'id'=>$image,
                'src'=>Storage::url($image)
            ];
        }
        return response()->json($data);
    }
}
