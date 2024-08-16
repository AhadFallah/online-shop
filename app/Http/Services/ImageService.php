<?php

namespace App\Http\Services;

use Illuminate\Support\Facades\Storage;

class ImageService extends ImageBuilder
{
    public function save()
    {
        $this->provider();

        $result = Storage::disk('local')->put($this->getFinalImageDirectory(), $this->image, $this->getFinalImageName());

        return $result ? $result : false;
    }

    public function deleteImage($imagePath)
    {
        if (Storage::disk('local')->exists($imagePath)) {
            Storage::disk('local')->delete($imagePath);
        }
    }

    public function deleteDirectoryAndFiles($directory)
    {
        if (Storage::disk('local')->exists($directory)) {
            $files = Storage::disk('local')->allFiles($directory);
            Storage::disk('local')->delete($files);
            Storage::disk('local')->deleteDirectory($directory);
        }
    }
}

