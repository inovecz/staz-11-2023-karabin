<?php

namespace App\Models;

class Category extends Model
{

    public $routesPrefix = 'categories';

    protected $fillable = [
        "name",
        "supplier",
        "cost"
    ];

   /* 
   public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
    */

}


