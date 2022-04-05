<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Discount extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'title','public','max_number_of_uses',
        'max_number_of_user_uses'
        ,'discount_type','user_id','product_id','canUseForAllProducts',
        'code','description','number_of_uses','discount_amount_percentage',
        'discount_amount_amount','starts_at','expires_at'
    ];


    public function users(){
//        return $this->hasMany(User::class);
        return $this->belongsToMany(User::class);
    }

    public function products(){
//        return $this->hasMany(Product::class);
        return $this->belongsToMany(Product::class);
    }
}
