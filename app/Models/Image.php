<?php

namespace App\Models;

use App\Models\BasketItem as ModelsBasketItem;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    public function imagable(){
        return $this->morphTo();
    }
}

