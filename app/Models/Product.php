<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends MainModel
{
    use HasFactory;

    public function setProductSlugAttribute($value)
    {
        $this->attributes['product_slug']=substr($this->uuid,0,5).'-'.str_replace(' ','-',strtolower($this->product_name));
    }
}
