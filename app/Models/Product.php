<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable=['name','category_id','price'];

    public function category(){
        return $this->belongsTo(Category::class);
    }

//    public function images(){
//        return $this->hasMany(Image::class);
//    }

    public function image(){

        return $this->hasOne(Image::class);
    }

    public function discounts(){

        return $this->belongsToMany(Discount::class);
    }
}
