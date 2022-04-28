<?php

namespace App\Traits;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

trait FileUpload
{

    public function uploadFile($file, $dir): string
    {
        if ($file) {
            $path = 'images/' . $dir . '/' . Str::uuid() . time() . '.' . $file->getClientOriginalExtension();
            $resource = File::get($file);
            Storage::disk('public')->put($path, $resource);
            return Storage::url($path);
        }
        return '';
    }
}
