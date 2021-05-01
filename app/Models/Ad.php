<?php

namespace App\Models;

use App\Models\Ad;
use App\Models\AdImage;
use App\Models\Category;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ad extends Model
{

    use HasFactory;
    use Searchable;


    protected $fillable=[
        'title',
        'description',
        'price',
        'category_id',
        'image',
    ];

    public function toSearchableArray()
    {
        $category=$this->category;
        $array = [
            'id'=> $this->id,
            'title'=> $this->title,
            'description'=> $this->description,
            'category'=>$category,
        ];
        

        return $array;
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    static public function ToBeRevisionedCount(){
        return Ad::where('is_accepted', null)->count();
    }

    public function adImages(){
        return $this->hasMany(AdImage::class);
    }

    // static public function getUrlByFilePath($filePath, $w = null, $h = null)
    // {
    //     if (!$w && !$h) {
    //         return Storage::url($filePath);
    //     }

    //     $path = dirname($filePath);
    //     $filename = basename($filePath);

    //     $file = "{$path}/crop{$w}x{$h}_{$filename}";

    //     return Storage::url($file);
    // }

    // public function getUrl($w = null, $h = null) {
    //     return AdImage::getUrlByFilePath($this->file, $w, $h);
    // }
}

