<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    //many to many
    public function products(){
        return $this->belongsToMany(Product::class);
    }

    //Many to may
    public function size(){
        return $this->belongsToMany(Size::class);
    }
}
