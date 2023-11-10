<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\Relations\HasOne;

class Product extends Model
{
    public $routesPrefix = 'products';

    protected $fillable = [
        "name",
        "supplier",
        "cost",
        "category"

    ];
    /*
    public function category(): HasOne
    {
        return $this->hasOne(Category::class,'category_id');
    }
    */  
}




