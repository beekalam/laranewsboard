<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Str;

class Post extends Model
{
    protected $guarded =[];

    public function addPostImages($image_ids)
    {
        if(!$image_ids) return;

        foreach ($image_ids as $imageId) {
            $image = Image::where('id', $imageId)->first();
            if ($image) {
                PostImage::create([
                    'post_id'       => $this->id,
                    'image_big'     => $image->image_big,
                    'image_default' => $image->image_default
                ]);
            }
        }
    }

    public function addPostTags($tags)
    {
        if(empty($tags)) return;

        foreach($tags as $tag){
            Tag::create([
                'post_id' => $this->id,
                'tag' => trim($tag),
                'tag_slug' => str_slug(trim($tag))
            ]);
        }
    }


}
