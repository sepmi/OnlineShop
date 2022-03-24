<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Discount extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'title','public','max_number_of_usage',
        'expire_time'
        ,'owner_user_id'
    ];


    public function users(){
        return $this->hasMany(User::class);
    }

    public function products(){
        return $this->hasMany(Product::class);
    }
}
