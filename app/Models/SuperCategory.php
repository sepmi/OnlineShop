<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SuperCategory extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = ['title'];

    public function categories(){

        return $this->hasMany(Category::class);
    }

    public function image(){

        return $this->hasOne(Image::class);
    }
}
