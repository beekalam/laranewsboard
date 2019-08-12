<?php

namespace App;

use App\traits\PostImageTrait;
use App\traits\PostTagTrait;
use Illuminate\Database\Eloquent\Model;
use Str;

class Post extends Model
{
    use PostImageTrait, PostTagTrait;
    protected $guarded = [];

    public function orderedListItems()
    {
        return $this->hasMany(PostOrderedListItem::class);
    }
}
