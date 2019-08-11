<?php

namespace App\Http\Controllers;

use App\Image;
use Gumlet\ImageResize;
use Gumlet\ImageResizeException;
use Illuminate\Http\Request;

class FileController extends Controller
{
    public function upload()
    {

    }

    //get images
    public function get_images()
    {
        $images = Image::all();
        $resp = '';
        foreach ($images as $image) {
            $resp .= '<div class="col-file-manager" id="img_col_id_' . $image->id . '">'
                . '<div class="file-box" data-file-id="' . $image->id . '" data-file-path="' . $image->image_default . '">'
                . '<div class="image-container">'
                . '<img src="' . asset('storage/' . $image->image_mid) . '" alt="" class="img-responsive">'
                . '</div></div> </div>';
            // $this->session->set_userdata("fm_last_img_id", $image->id);
        }
        return response($resp);
    }

    public function upload_multiple_images(Request $request)
    {
        foreach ($request->file('files') as $image) {
            $path = $image->store('post_images', 'public');
            Image::create([
                'image_big'     => $path,
                'image_default' => $this->postDefaultImageUpload($image->getPathname()),
                'image_slider'  => $this->postSliderImageUpload($image->getPathname()),
                'image_mid'     => $this->postMidImageUpload($image->getPathname()),
                'image_small'   => $this->postSliderImageUpload($image->getPathname()),
                'image_mime'    => $image->getClientMimeType(),
                'user_id'       => auth()->id()
            ]);
        }
    }

    private function postDefaultImageUpload($path)
    {
        try {
            $image = new ImageResize($path);
            $image->quality_jpg = 85;
            $image->resizeToWidth(750);
            $file_name = 'post_images/image_750x_' . uniqid() . '.jpg';
            $new_path = storage_path('app/public/' . $file_name);
            $image->save($new_path, IMAGETYPE_JPEG);
            return $file_name;
        } catch (ImageResizeException $e) {
            return null;
        }
    }

    public function postSliderImageUpload($path)
    {
        try {
            $image = new ImageResize($path);
            $image->quality_jpg = 85;
            $image->crop(600, 460, true);
            $file_name = "post_images/image_600x400_" . uniqid(true) . ".jpg";
            $new_path = storage_path('app/public/' . $file_name);
            $image->save($new_path, IMAGETYPE_JPEG);
            return $file_name;
        } catch (ImageResizeException $e) {
            return null;
        }
    }

    public function postMidImageUpload($path)
    {
        try {
            $image = new ImageResize($path);
            $image->quality_jpg = 85;
            $image->crop(380, 226, true);
            $filename = 'post_images/image_300x226_' . uniqid(true) . '.jpg';
            $new_path = storage_path('app/public/' . $filename);
            $image->save($new_path, IMAGETYPE_JPEG);
            return $filename;
        } catch (ImageResizeException $e) {
            return null;
        }
    }

    //post small image upload
    public function postSmallImageUpload($path)
    {
        try {
            $image = new ImageResize($path);
            $image->quality_jpg = 85;
            $image->crop(140, 98, true);
            $filename = 'post_images/image_140x98_' . uniqid(true) . '.jpg';
            $new_path = storage_path('app/public' . $filename);
            $image->save($new_path, IMAGETYPE_JPEG);
            return $filename;
        } catch (ImageResizeException $e) {
            return null;
        }
    }


}
