<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Image;

class Product extends Model
{
    use HasFactory;

    public function images(){
        return $this->morphMany(Image::class, 'imagable');
    }

    public function properties(){
        return $this->hasMany(Property::class);
    }

    public function categories(){
        return $this->belongsToMany(Category::class);
    }
}
