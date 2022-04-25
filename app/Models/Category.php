<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Category extends Model
{
        use HasFactory,SoftDeletes;

    protected $fillable = ['title','super_category_id'];

    public function products(){
        return $this->hasMany(Product::class);
    }

    public function superCategory(){

        return $this->belongsTo(SuperCategory::class);
    }

    public function image(){

        return $this->hasOne(Image::class);
    }
}
