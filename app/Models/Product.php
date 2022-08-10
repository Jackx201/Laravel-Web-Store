<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    const DRAFT = 1;
    const RELEASED = 2;

    use HasFactory;
    protected $guarded = ['id', 'created_at', 'updated_at'];

    //many to many
    public function size(){
        return $this->hasMany(Size::class);
    }

    //one to many inverse
    public function brand(){
        return $this->belongsTo(Brand::class);
    }

    public function subcategory(){
        return $this->belongsTo(Subcategory::class);
    }

    public function colors(){
        return $this->belongsToMany(Color::class)->withPivot('quantity');
    }

    //polimorfica
    public function images(){
        return $this->morphMany(Image::class, "imageable");
    }

    public function getRouteKeyName(){
        return 'slug';
    }

}
