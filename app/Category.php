<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['parent_id', 'name'];

    /* parent category */
    public function parent(){
        return $this->hasOne(Category::class,'id','parent_id');
    }
}
