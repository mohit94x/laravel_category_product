<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['category', 'name'];

    public function getCategory()
    {
        return $this->hasOne(Category::class, 'id', 'category');
    }
}
