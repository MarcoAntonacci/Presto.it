<?php

namespace App\Models;

use App\Models\Ad;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ad extends Model
{

    use HasFactory;


    protected $fillable=[
        'title',
        'description',
        'price',
        'category_id',
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    static public function ToBeRevisionedCount(){
        return Ad::where('is_accepted', null)->count();
    }
}
