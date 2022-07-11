<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    #Fill the row

    protected $fillable = ['name', 'slug', 'image', 'icon'];

    //One to many

    public function subcategories(){
        return $this->hasMany(Subcategory::class);
    }

    //many to many
    public function brands(){
        return $this->belongsToMany(Brand::class);
    }

    //one to many through

    public function products(){
        return $this->hasManyThrough(Product::class, Subcategory::class);
    }
}
