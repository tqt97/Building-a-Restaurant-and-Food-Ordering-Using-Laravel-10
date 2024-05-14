<?php

namespace App\Traits;

use Illuminate\Http\Request;

trait UploadFileTrait
{
    public function uploadImage(Request $request, $field, $folder = '', $name = '')
    {
        $root = 'uploads/';

        if ($request->hasFile($field)) {
            $image = $request->file($field);

            $name = $name ? $name . '_' . time() . '.' . $image->getClientOriginalExtension() : 'image_' . time() . '.' . $image->getClientOriginalExtension();
            $path = $root . $folder;
            $destination = public_path('/' . $path);

            $image->move($destination, $name);

            return $path . '/' . $name;
        }

        return null;
    }
}
