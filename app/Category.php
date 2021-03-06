<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [];

    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

    public function parent()
    {
        return Category::where('id', $this->parent_id)->first();
    }

    public static function subCategories()
    {
        return Category::where('parent_id', '!=', '0');
    }

    public function scopeParentCategories($query)
    {
        return $query->where('parent_id','=','0');
    }
}
