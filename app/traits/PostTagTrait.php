<?php


namespace App\traits;


use App\Tag;

trait PostTagTrait
{
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