<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded =[];

    public function images()
    {
        return $this->hasMany(Productimage::class,'product_id','id');
    }

    public function sizes()
    {
        return $this->belongsToMany(Size::class,ProductSize::class,'product_id','size_id');
    }

    public function colors()
    {
        return $this->belongsToMany(Color::class,ProductColor::class,'product_id','color_id');
    }
}
