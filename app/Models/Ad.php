<?php

namespace App\Models;

use App\Models\Ad;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Scout\Searchable;

class Ad extends Model
{

    use HasFactory;
    use Searchable;


    protected $fillable=[
        'title',
        'description',
        'price',
        'category_id',
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
}
