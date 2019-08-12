<?php


namespace App\traits;


use App\Image;
use App\PostImage;

trait PostImageTrait
{
    public function addPostImages($image_ids)
    {
        if (!$image_ids) return;

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
}