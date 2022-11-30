<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pivot extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'product_product_category';


    public function getProduct(){
        return $this->hasMany(Product::class);
    }

    public function getCategory(){
        return $this->hasMany(ProductCategory::class);
    }
}


